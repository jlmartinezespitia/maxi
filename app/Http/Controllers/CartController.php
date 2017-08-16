<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Flag;
use App\Order;
use App\OrderItem;
use App\Mail\MyMail;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
   public function __construct() {
   		if(!\Session::has('cart')) \Session::put('cart',array());
   }
    
    //Show Cart
   public function show()
   {
   	  $categories = Product::groupBy('category_id')->select('category_id', DB::raw('count(*) as countcat'))->get();
      $cart = \Session::get('cart');
      $total = $this -> total();
      return view('store.cart', compact('cart', 'total'), compact('categories'));
   }
    
    //Add Item
   public function add(Product $product, $cantidad, $precio){
   		$cart = \Session::get('cart');
   		//$product->cantidad = 0;
      //$product->precio=0;
   		$cart[$product->slug] = $product;
      $cart[$product->slug]->cantidad = $cantidad;
      $cart[$product->slug]->precio = $precio;
   		\Session::put('cart',$cart);

   		return redirect()->route('cart-show');
   }

   //Delete item
    public function delete(Product $product){
         $cart = \Session::get('cart');
         unset($cart[$product->slug]);
         \Session::put('cart',$cart);

         return redirect()->route('cart-show');
    }

//Update item
    public function update(Product $product, $cantidad){
         $cart = \Session::get('cart');
         $cart[$product->slug]->cantidad = $cantidad;
         \Session::put('cart',$cart);

         return redirect()->route('cart-show');
    }

    //Trash cart
    public function trash(Product $product){
         \Session::forget('cart');

         return redirect()->route('cart-show');
    }

    //Total
    private function total()
    {
      $cart = \Session::get('cart');
      $total=0;
      foreach($cart as $item){
            $total += $item->precio * $item->cantidad;
      }
      return $total;
    }

    //Detalle del pedido
    public function orderDetail()
    {
      if (count(\Session::get('cart')) <= 0) return redirect()->route('home');
      $cart = \Session::get('cart');
      $total = $this->total();
      $categories = Product::groupBy('category_id')->select('category_id', DB::raw('count(*) as countcat'))->get();
      return view('store.order-detail', compact('cart','total','categories'));
    }

    public function compra()
    {
      $this->saveOrder();
      
     // \Session::forget('cart');

      return \Redirect::route('home')
        ->with('message','Se ha confirmado la compra, nos pondremos en contacto con usted');
    }

    public function saveOrder()
    {
      $subtotal = 0;
      $cart = \Session::get('cart');
      //$shipping = 100;
      foreach($cart as $producto){
        $subtotal += $producto->cantidad * $producto->precio;
      }
      $order = Order::create([
        'subtotal' => $subtotal,
        //'shipping' => $shipping,
        'user_id' => \Auth::user()->id
      ]);
      foreach ($cart as $producto) {
        $this->saveOrderItem($producto,$order->id);
      }
      Mail::to('jaimelme@yahoo.com')->send(new MyMail($cart));
    }

    protected function saveOrderItem($producto,$order_id)
    {
      OrderItem::create([
        'price' => $producto->precio,
        'quantity' => $producto->cantidad,
        'product_id' => $producto->id,
        'order_id' => $order_id,
      ]);
    }
}
