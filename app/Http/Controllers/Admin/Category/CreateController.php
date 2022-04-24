<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cars = Car::all();
        return view('admin.categories.create', compact('cars'));
    }
}
