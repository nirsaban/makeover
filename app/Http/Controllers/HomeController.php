<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $categories = Category::with('product')->get();
        return view('welcome', compact('categories'));
    }
}
