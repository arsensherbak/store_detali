<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $marks = Mark::all();
        $products = Product::paginate(2);
        return view('main.home', compact('marks', 'products'));
    }
}
