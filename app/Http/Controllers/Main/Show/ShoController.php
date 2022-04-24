<?php

namespace App\Http\Controllers\Main\Show;

use App\Http\Controllers\Controller;

use App\Models\Product;



class ShoController extends Controller
{
    public function __invoke(Product $product)
    {

        return view('main.prodd', compact('product'));
    }
}
