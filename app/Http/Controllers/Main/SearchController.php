<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $search = $request->validate([
            's'=>'required|string'
        ]);

        $string = implode(" ",$search);
        $prod = DB::table('products')->where('title', 'LIKE', "%$string%")->get();

        return view('main.search', compact('prod'));
    }
}
