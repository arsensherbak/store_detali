<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SubCategory\StoreRequest;

use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request )
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image',  $data['image']);
        Subcategory::firstOrCreate($data);
        return redirect()->route('admin.subcategory.index');
    }
}
