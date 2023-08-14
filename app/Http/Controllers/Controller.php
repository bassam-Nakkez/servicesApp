<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function sendRespons ( $result , $messages  )
    {
    $respons =
    [
        'success' => true ,
        'data' =>  $result ,
        'message' => $messages,
    ];

    return response()->json($respons , 200);
    }


    public function sendError ( $error ,  $errorMessages = [] , $code = 404)
    {

        $respons =
        [
            'success' => false ,
            'errors'  => $error ,
        ];

        return response()->json($respons , $code);
    }


    public function sendErrors (  $errorMessages = [] , $code = 404)
    {
        $respons =
        [
            'success' => false ,
            'errors'  => 'Error!' ,
        ];

        if(!empty($errorMessages)) // empty
        {
            $respons['errors'] = $errorMessages;
            return $respons;
        }

        return response()->json($respons , $code);
    }
}
