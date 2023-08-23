<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{




    public function view(Request $request)
    {
        return view('page.company_info');
    }


    public function update(Request $request)
    {

        // return
    }


}
