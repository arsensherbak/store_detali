<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $marks = Mark::all();
        return view('admin.cars.create', compact('marks'));
    }
}
