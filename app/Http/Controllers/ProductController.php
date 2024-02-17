<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create() {

        $categories = Category::all();

        return view('pages.product.create', compact('categories'));

    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        dd($data);

    }

}
