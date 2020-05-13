<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index(){
        return new PlayerController(PlayerConfig::all());
    }

    public function show($id){
        return new PlayerResource(Player::findOrFail($id));
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required|max:255',
        ]);
    }
}
