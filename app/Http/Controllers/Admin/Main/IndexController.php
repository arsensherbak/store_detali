<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Mark;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['adminsCount'] = User::all()->count();
        $data['carsCount'] = Car::all()->count();
        $data['marksCount'] = Mark::all()->count();
        $data['productsCounts'] = Product::all()->count();
        $data['categoryCount'] = Category::all()->count();
        $data['subcategoryCount'] = Subcategory::all()->count();

        return view('admin.main.index', compact('data'));
    }
}
