<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index (){
        return Achievement::all();
    }

    public function store (Request $request){
        $data = $request->all();
        Achievement::create($data);
    }

    public function destroy ($id){
        $achievement = Achievement::find($id);
        if(!$achievement) return $this->response('Conquista não encontrada', null, false, 404);
        $achievement->delete();
        return $this->response('', null, true, 200);
    }

    public function show($id){
        $achievement = Achievement::find($id);
        if(!$achievement) return $this->response('Conquista não encontrada', null, false, 404);
        return $this->response('',$achievement, true, 200);
    }

    public function update($id, Request $request){
        $data= $request->all();
        $achievement = Achievement::find($id);
        if(!$achievement) return $this->response('Pet não encontrado', null, false, 404);
        $achievement->update($data);
        return $achievement;
    }
}
