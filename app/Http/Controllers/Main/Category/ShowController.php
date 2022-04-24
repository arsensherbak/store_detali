<?php

namespace App\Http\Controllers\Main\Category;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Subcategory;


class ShowController extends Controller
{
    public function __invoke(Car $car)
    {

        return view('main.category', compact('car'));
    }
}
