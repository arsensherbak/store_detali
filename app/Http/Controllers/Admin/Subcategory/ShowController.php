<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Subcategory;


class ShowController extends Controller
{
    public function __invoke(Subcategory $subcategory)
    {

        return view('admin.subcategories.show', compact('subcategory'));
    }
}
