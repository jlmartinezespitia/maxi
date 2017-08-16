<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Flag;
use App\Zone;
use App\Scala;
use Mail;
use App\Mail\MyMail;

class StoreController extends Controller
{
    //public $cart;

    public function __construct() {
        if(!\Session::has('cart')) \Session::put('cart',array());
   }

    public function index()
    {
    	$categories = Product::groupBy('category_id')->select('category_id', DB::raw('count(*) as countcat'))->get();
         
         //slidebar
        //dd($categories);
        $products = Product::orderBy('clave','asc')->paginate(8);
        //dd($products);
    	return view('store.index', compact('products','categories'));
        
    }
    public function show($slug,$cantidad,$precio)
    {
    	$categories = Product::groupBy('category_id')->select('category_id', DB::raw('count(*) as countcat'))->get();
        $product = Product::where('slug',$slug)->first();
        $idz = Product::where('slug',$slug)->pluck('id');
        $zones = Zone::where('product_id', $idz)->get();
        $scalas = Scala::where('product_id', $idz)->get();
    	//dd($zones);
        $cart = \Session::get('cart');
        $cart[$product->slug] = $product;
        $cart[$product->slug]->cantidad = $cantidad;
        $cart[$product->slug]->precio = $precio;
        
        \Session::put('cart',$cart);
        $cart = $cart[$product->slug];


        return view('store.show', compact('product','categories','zones','scalas','cart'));
    }

    public function myMail()
    {
        $myEmail = 'jaimelme@yahoo.com';
        Mail::to($myEmail)->send(new MyMail());
        dd("Mail Send Successfully");

    }
}
