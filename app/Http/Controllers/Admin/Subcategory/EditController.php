<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;

use App\Models\Subcategory;


class EditController extends Controller
{
    public function __invoke(Subcategory $subcategory)
    {
        return view('admin.subcategories.edit', compact('subcategory'));
    }
}
