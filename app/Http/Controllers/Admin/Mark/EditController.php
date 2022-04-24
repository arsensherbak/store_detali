<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Mark $mark)
    {
        return view('admin.marks.edit', compact('mark'));
    }
}
