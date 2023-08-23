<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{




    public function view(Request $request)
    {
        $company=Company::query()->first()->get();
        return view('page.company_info')->with('company',$company);
    }


    public function update(Request $request)
    {
        return view('page.company_info');
        // return $request;
        // $company = Company::update($request->all());
        // return view('page.company_info')->with('company',$company);

    }






}
