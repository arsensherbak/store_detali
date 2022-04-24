<?php

namespace App\Http\Controllers\Admin\Subcategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subcategory\UpdateRequest;
use App\Models\Car;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Subcategory $subcategory)
    {
        $data = $request->validated();
        if (isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/image',  $data['image']);
        }
        $subcategory->update($data);
        return view('admin.subcategories.show', compact('subcategory'));
    }
}
