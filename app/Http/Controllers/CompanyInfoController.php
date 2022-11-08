<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyInfoController extends Controller
{
    public function create(Request $request)
    {
        
        if(is_null($request->pageFlag)){
            return view('companyinfo/create');
        } else {
            return view('companyinfo/create', compact('request'));
        }
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
