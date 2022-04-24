<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        if (isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/image',  $data['image']);
        }
        $category->update($data);
        return view('admin.categories.show', compact('category'));
    }
}
