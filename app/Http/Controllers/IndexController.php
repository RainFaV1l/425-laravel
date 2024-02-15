<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

        // $categories = Category::query()->get();

        $categories = Category::all();

        // return view('pages.admin', ['categories' => $categories]);

        // return view('pages.admin', [$categories]);

        return view('pages.admin', compact('categories'));

    }
}
