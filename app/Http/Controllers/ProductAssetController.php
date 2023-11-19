<?php

namespace App\Http\Controllers;

use App\Models\Product_Asset;
use Illuminate\Http\Request;

class ProductAssetController extends Controller
{
    public function index(){
        $assets = Product_Asset::all();
        return $assets;
    }
    public function store(Request $request)
    {

        $data = $request->all();

        $asset = Product_Asset::create($data);
        return response($asset, 201);
    }

    public function update($id, Request $request){
        $asset = Product_Asset::find($id);

        if(empty($asset)) {
            return $this->response('Ativo não encontrado!', null, false, 404);
        }
        $asset->update($request->all());
        $message = $asset->name." atualizado com sucesso.";
        return $this->response($message, $asset);
    }

    public function destroy($id, Request $request){
        $asset = Product_Asset::find($id);

        if(empty($asset)) {
            return $this->response('Ativo não encontrado!', null, false, 404);
        }
        $asset= Product_Asset::destroy($id);
        return $this->response("Ativo excluido com sucesso", null);
    }
}
