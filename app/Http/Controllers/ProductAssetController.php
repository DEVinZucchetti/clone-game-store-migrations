<?php

namespace App\Http\Controllers;

use App\Models\Product_Asset;
use Illuminate\Http\Request;

class ProductAssetController extends Controller
{
    public function index()
    {
        try {

            $assets = Product_Asset::all();
            return $assets;
        } catch (\Exception $execption) {
            return $this->response($execption->getMessage(), null, false, 500);
        }
    }
    public function store(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required|string|max:150'
            ]);

            $data = $request->all();

            $asset = Product_Asset::create($data);
            return response($asset, 201);
        } catch (\Exception $execption) {
            return $this->response($execption->getMessage(), null, false, 500);
        }
    }

    public function update($id, Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:150'
            ]);

            $asset = Product_Asset::find($id);

            if (empty($asset)) {
                return $this->response('Ativo não encontrado!', null, false, 404);
            }
            $asset->update($request->all());
            $message = $asset->name . " atualizado com sucesso.";
            return $this->response($message, $asset);
        } catch (\Exception $execption) {
            return $this->response($execption->getMessage(), null, false, 500);
        }
    }

    public function destroy($id)
    {
        try {
            $asset = Product_Asset::find($id);

            if (empty($asset)) {
                return $this->response('Ativo não encontrado!', null, false, 404);
            }
            $asset = Product_Asset::destroy($id);
            return $this->response("Ativo excluido com sucesso", null);
        } catch (\Exception $execption) {
            return $this->response($execption->getMessage(), null, false, 500);
        }
    }
}
