<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //
    public function create(){
        return view('registrocompania');
    }

    public function store(Request $request){
        $company = new Company();
        $company->principalActivity=$request->principalActivity;
        $company->save();

        return $company;
    }
}
