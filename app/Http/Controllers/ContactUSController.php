<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use App\Product;
use App\Category;
use Illuminate\Support\Facades\DB;

class ContactUSController extends Controller
{
    //
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function contactUS()
    {
        $categories = Product::groupBy('category_id')->select('category_id', DB::raw('count(*) as countcat'))->get();
        return view('contactUS', compact('categories'));

    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);
        ContactUS::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
    public function us()
    {
        $categories = Product::groupBy('category_id')->select('category_id', DB::raw('count(*) as countcat'))->get();
        return view('us', compact('categories'));

    }
}
