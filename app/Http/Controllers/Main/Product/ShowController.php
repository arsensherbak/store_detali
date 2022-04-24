<?php

namespace App\Http\Controllers\Main\Product;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Subcategory;


class ShowController extends Controller
{
    public function __invoke(Subcategory $subcategory)
    {

        return view('main.product', compact('subcategory'));
    }
}
