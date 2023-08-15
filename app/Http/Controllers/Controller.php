<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function sendRespons ( $result , $messages, $code = 200)
    {
    $respons =
    [
        'statusCode' => $code ,
        'data' =>  $result ,
        'message' => $messages,
    ];

    return response()->json($respons , $code);
    }


    public function sendError ( $error ,  $errorMessages = [] , $code = 404)
    {

        $respons =
        [
            'statusCode' => $code ,
            'data'  => $error ,
            'message' => $errorMessages,
        ];

        return response()->json($respons,$code);
    }
}
