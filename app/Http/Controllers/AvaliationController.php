<?php

namespace App\Http\Controllers;

use App\Models\Avaliation;
use Illuminate\Http\Request;

class AvaliationController extends Controller
{
    public function index($productId)
    {
        $avaliations = Avaliation::where('product_id', $productId)->get();
        return $this->response('Avaliações obtidas com sucesso', true, $avaliations, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'description' => 'nullable|string',
            'recommended' => 'nullable|boolean',
        ]);

        $avaliation = Avaliation::create($request->all());

        return $this->response('Avaliação cadastrada com sucesso', true, $avaliation, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'nullable|string',
            'recommended' => 'nullable|boolean',
        ]);

        $avaliation = Avaliation::findOrFail($id);
        $avaliation->update($request->all());

        return $this->response('Avaliação atualizada com sucesso', true, $avaliation, 200);
    }

    public function destroy($id)
    {
        $avaliation = Avaliation::findOrFail($id);
        $avaliation->delete();

        return $this->response('Avaliação deletada com sucesso', true, null, 200);
    }
}
