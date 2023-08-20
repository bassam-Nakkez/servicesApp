<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\user\Login;
use App\Http\Controllers\Controller;
use App\Http\Requests\user\Register;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;

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
    catch(\Throwable $e){
        return parent::sendError('error in DB UserController class line 34',$e->getMessage(),500);
    }
    }

    public function register(Register $request) {
        try {
            $user=User::create($request->all());
            $user->socid=$user->id;
            $user['password'] = Hash::make($request->password);
            $user->save();
            return parent::sendRespons(['result'=>[
                'data'=>null,
                'message'=>"The User is Register succesfully",
                'statusCode'=>200
            ]],'The User is Register succesfully',201);
        } catch (\Throwable $th) {
            return parent::sendError('error in DB UserController class line 50',$th->getMessage(),500);
        }
    }

    public function login(Login $request){
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = User::query()->where('email','=',$request->email)->get();
                $user[0]['entity']=$request->entity;
                $user[0]['reset']=$request->reset;
                $user[0]['type']="1";
                $user[0]['API-KEY']=$request->token;
                $user[0]['token']=$user[0]->createToken($request->token)->accessToken;
                $user[0]['subscriptionType']=1;
                $user[0]['urssafMember']=false;
                $user[0]['clientId']="";
                if($user[0]['socid']==null){
                $user[0]['socid']=(String)$user[0]->userID;
                }
                if(isNull($user[0]['photo']))
                $user[0]['photo']="";
                else
                $user[0]['photo']=$user->photo;
                $user[0]->save();

                $user[0]['userId']=(String)$user[0]->userID ;
                $user[0]['fullName']=$user[0]->firstName . $user[0]->lastName;

                $contact=$user[0]->contact;
                $contactWithArrayOption=[];
                foreach ($contact as $value) {
                    $contactWithArrayOption[]=$value->arrayOption;
                }

                return parent::sendRespons(['result'=>$user[0]
                ],"User Enterted",201);
            }
            return parent::sendError(["result"=>"Not Found: User not found"],null);
        } catch (\Throwable $th) {
            return parent::sendError('error in DB UserController class line 86',$th->getMessage(),500);
        }
    }

    public function getUser(){
        try {
            $user=Auth::user();
            $user['firstname']=$user['firstName'];
            $user['user_mobile']=$user['phone'];
            $user['birth']="5000";
            return parent::sendRespons(["result"=>Auth::user()],"The User is Register succesfully",200);

        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 95'],$th->getMessage(),404);
        }
    }

}
