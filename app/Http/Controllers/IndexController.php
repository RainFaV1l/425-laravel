<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function catalog() {
        return view('pages.catalog');
    }

    public function admin() {
        return view('pages.admin');
    }
}
