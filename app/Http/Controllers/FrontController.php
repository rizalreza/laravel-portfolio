<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class FrontController extends Controller
{
    public function index()
    {
        $items=Item::all();
        return view('front.home',compact('items'));
    
    }

    public function posts()
    {
        $items=Item::all();
    	return view('front.posts', compact('items'));
    }

    public function post($id)
    {
       $item=Item::find($id);
       // dd($item);
        return view('front.post', compact('item'));
    }
    
}
