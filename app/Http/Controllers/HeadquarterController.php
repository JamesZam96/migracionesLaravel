<?php

namespace App\Http\Controllers;

use App\Models\Headquarter;
use Illuminate\Http\Request;

class HeadquarterController extends Controller
{
    //

    public function create(){
        return view('registrarcuartel');
    }

    public function store(Request $request){
        $headquarter = new Headquarter();
        $headquarter->name=$request->name;
        $headquarter->location=$request->location;
        $headquarter->save();

        return $headquarter;
    }
}
