<?php

namespace App\Http\Controllers\Main\Show;

use App\Http\Controllers\Controller;

use App\Models\Product;



class ShowController extends Controller
{
    public function __invoke(Product $product)
    {

        return view('main.prod', compact('product'));
    }
}
