<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Mark $mark)
    {

        return view('main.show', compact('mark'));
    }
}
