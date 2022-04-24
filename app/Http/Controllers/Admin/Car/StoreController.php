<?php

namespace App\Http\Controllers\Admin\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Car\StoreRequest;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request )
    {
        $data = $request->validated();

        $data['image'] = Storage::disk('public')->put('/image',  $data['image']);
        Car::firstOrCreate($data);
        return redirect()->route('admin.car.index');
    }
}
