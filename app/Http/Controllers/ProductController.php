<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function product()
    {
        return view('product');
    }
    public function company()
    {
        return view('company');
    }
}
