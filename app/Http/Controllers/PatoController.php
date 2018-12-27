<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatoController extends Controller
{
    public function index0()
    {
        return view('home');
    }
    public function index1()
    {
        return view('resto.about');
    }
    public function index2()
    {
        return view('resto.blog-detail');
    }
    public function index3()
    {
        return view('resto.blog');
    }
    public function index4()
    {
        return view('resto.contact');
    }
    public function index5()
    {
        return view('resto.gallery');
    }
    public function index6()
    {
        return view('resto.menu');
    }
    public function index7()
    {
        return view('resto.reservation');
    }
}
