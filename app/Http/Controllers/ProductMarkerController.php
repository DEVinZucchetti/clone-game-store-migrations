<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\ProductMarker;


class ProductMarkerController extends Controller
{
    public function index(Request $request){

        $product_id = $request->query('product_id');
        $marker_id = $request->query('marker_id');

        $productMarker = ProductMarker::query()
        ->where('product_id', $product_id)->where('marker_id', $marker_id )->get();

        return $productMarker;
     }

    public function store(Request $request){
        try {
            $request->validate([
                'product_id' => 'required|integer',
                'marker_id' => 'required|integer'
            ]);

            $data = $request->all();

            $productMarker = ProductMarker::create($data);

            return $productMarker;

        } catch (Exception $exception) {
            return response()->json(['message' => $exception->getMessage()], 400);
        }
    }

    public function destroy($id){
        $productMarker = ProductMarker::find($id);

        if(!$productMarker) return response()->json(['message' => 'Marcador de jogo não encontrado'], 404);

        $productMarker->delete();

        return response('', 204);
    }


}
