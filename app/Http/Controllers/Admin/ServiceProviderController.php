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


            $sps = User::query()->where('socid' , 0 )->with('category')->latest()->limit(15)->get();

            for ( $i = 0 ; $i < count($sps) ; $i++ )
            {

            $sps[$i]['fullName'] = $sps[$i]->firstName .' '. $sps[$i]->lastName;
            return view('page.employees' , compact('sps'))->with('success',true);
            }

        }
        catch(\Throwable $e){ return $e->getMessage();}
    }

}
