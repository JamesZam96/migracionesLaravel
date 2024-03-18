<?php

namespace App\Http\Controllers;

use App\Models\Soldier;
use Illuminate\Http\Request;

class SoldierController extends Controller
{
    //

    public function create(){
        return view('registrosoldados');
    }

    public function store(Request $request){
        $soldier = new Soldier();
        $soldier->name=$request->name;
        $soldier->lastname=$request->lastname;
        $soldier->grade=$request->grade;
        $soldier->save();

        return $soldier;
    }
}
