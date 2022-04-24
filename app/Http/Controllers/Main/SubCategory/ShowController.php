<?php

namespace App\Http\Controllers\Main\SubCategory;

use App\Http\Controllers\Controller;

use App\Models\Category;


class ShowController extends Controller
{
    public function __invoke(Category $category)
    {

        return view('main.subCategory', compact('category'));
    }
}
