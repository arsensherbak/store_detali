<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $marks = Mark::all();
        return view('admin.marks.index', compact('marks'));
    }
}
