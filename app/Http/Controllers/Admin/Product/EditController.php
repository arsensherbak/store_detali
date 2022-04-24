<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;


class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $cars = Car::all();
        return view('admin.products.edit', compact('categories','subcategories', 'cars', 'product'));
    }
}
