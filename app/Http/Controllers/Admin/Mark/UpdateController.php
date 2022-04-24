<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mark\UpdateRequest;
use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Mark $mark)
    {
        $data = $request->validated();
        if (isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/image',  $data['image']);
        }
        $mark->update($data);
        return view('admin.marks.show', compact('mark'));
    }
}
