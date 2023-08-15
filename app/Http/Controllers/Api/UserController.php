<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    public function isUser(String $email){
        try{
        $user=User::query()->where('email','=',$email)->get();

        if(isEmpty($user))
        {
            return parent::sendRespons(['result'=>[
                'data'=>[ 'message' =>"User not found"]
            ]],"The User is Register succesfully",200);
        }
        else{

            return response()->json(['update this part in code in back the location is \n App/Controlles/Api/UserControllers line 24']);
        }
    }
    catch(\Exception $e){
        return parent::sendError('error in DB UserController class line 29',$e->getMessage(),500);
    }
    }

    


}
