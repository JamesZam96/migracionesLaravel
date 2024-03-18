<?php

namespace App\Http\Controllers;

use App\Models\Corp;
use Illuminate\Http\Request;

class CorpController extends Controller
{
    //
    public function create(){
        return view('registrocuerpo');
    }

    public function store(Request $request){
        $corp = new Corp();
        $corp->denomination=$request->denomination;
        $corp->save();

        return $corp;
    }
}
