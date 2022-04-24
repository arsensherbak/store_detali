<?php

namespace App\Http\Controllers\Admin\Mark;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Mark\StoreRequest;
use App\Models\Mark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request )
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/image',  $data['image']);
        Mark::firstOrCreate($data);
        return redirect()->route('admin.mark.index');
    }
}
