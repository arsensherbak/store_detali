<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Mark;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Car $car)
    {
        $car->delete();
        return redirect()->route('admin.car.index');
    }
}
