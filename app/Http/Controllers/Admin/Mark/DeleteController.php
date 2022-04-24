<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Controllers\Controller;
use App\Models\Mark;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Mark $mark)
    {
        $mark->delete();
        return redirect()->route('admin.mark.index');
    }
}
