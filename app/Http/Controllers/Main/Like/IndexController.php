<?php

namespace App\Http\Controllers\Main\Like;

use App\Http\Controllers\Controller;

use App\Models\Product;



class IndexController extends Controller
{
    public function __invoke(Product $product)
    {
        auth()->user()->likedProducts()->toggle($product->id);
        return redirect()->back();
    }
}
