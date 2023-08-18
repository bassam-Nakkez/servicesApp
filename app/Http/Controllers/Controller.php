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


    public function sendError ( $message ,  $data = [] , $code = 404)
    {

        $respons =
        [
            'statusCode' => $code ,
            'timestamp'=>date_default_timezone_get(),
            'data'  => $data ,
            'message' => $message,
        ];

        return response()->json($respons,$code);
    }


    function renameArrayKey ($array  , $oldName , $newName )
    {
        $array[$newName] = $array[$oldName];
        unset( $array[$oldName] );
    }

    function withoutCreated_at ($array)
    {
        unset( $array['created_at'] );
        unset( $array['updated_at'] );
    }



}
