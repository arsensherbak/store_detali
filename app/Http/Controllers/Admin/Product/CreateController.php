<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $cars = Car::all();
        return view('admin.products.create', compact('categories','subcategories', 'cars'));
    }
}
