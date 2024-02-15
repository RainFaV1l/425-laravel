<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function create() {

        return view('pages.category.create');

    }

    public function store(StoreRequest $request) {

        $data = $request->validated();

        Category::query()->create($data);

        return redirect()->route('index.admin');

    }

    public function destroy(Category $category) {

        $category->delete();

        return redirect()->route('index.admin');

    }
}
