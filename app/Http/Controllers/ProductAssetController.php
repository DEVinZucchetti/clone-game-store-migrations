<?php

namespace App\Http\Controllers;

use App\Models\Product_Asset;
use Illuminate\Http\Request;

class ProductAssetController extends Controller
{
    public function index(Request $request){

    }
    public function store(Request $request)
    {

        $data = $request->all();

        $asset = Product_Asset::create($data);
        return response($asset, 201);
    }
}
