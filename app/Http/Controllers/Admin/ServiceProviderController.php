<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceProviderController extends Controller
{
    public function index ()
    {
        try{

            $sps = User::query()->where('socid' , 0 )->with('category')->latest()->limit(15)->get();

            $categories=Category::query()->get();
            for ( $i = 0 ; $i < count($sps) ; $i++ )
            {

            $sps[$i]['fullName'] = $sps[$i]->firstName .' '. $sps[$i]->lastName;
            return view('page.employees' , compact('sps'))->with('categories',$categories);
            }

        }
        catch(\Throwable $e){ return $e->getMessage();}
    }

    public function add(Request $request)  {
        try {
            User::query()->create(
                [
                'firstName'=>$request->firstName,
                'lastName'=>$request->lastName,
                'isActive'=>true,
                'email'=>$request->email,
                'gender'=>'Fmale',
                'password'=>Hash::make($request->password) ,
                'status'=>0,
                'personal_email'=>$request->email,
                'zip'=>4444,
                'phone'=>$request->phone,
                'user_mobile'=>$request->phone,
                'login'=>$request->email,
                'socid'=>1,
                "entity"=>"1",
                "reset"=>0,
                'categoryID'=>$request->categoryID
            ]);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

}
