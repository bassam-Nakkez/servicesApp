<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceProviderController extends Controller
{
    public function index ()
    {
        try{


            $sps = User::where('socid' , 0 )->latest()->limit(15);

            for ( $i = 0 ; $i < count($sps) ; $i++ )
            {

            $sps[$i]['fullName'] = $sps[$i]->firstName .' '. $sps[$i]->lastName;
            return view('page.employees' , compact('sps'))->with('success',true);
            // return view('p' , compact('sp'))->with('success',true);
            }

        }
        catch(\Throwable $e){ return $e->getMessage();}
    }

}
