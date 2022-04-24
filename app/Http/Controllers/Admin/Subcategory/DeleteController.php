<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Mark;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Subcategory $subcategory)
    {
        $subcategory->delete();
        return redirect()->route('admin.subcategory.index');
    }
}
