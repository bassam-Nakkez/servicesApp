<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use function PHPSTORM_META\map;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function sendRespons ( $result , $messages, $code = 200)
    {
    $respons =
    [
        'statusCode' => $code ,
        'message' => $messages,
        'data' =>  $result ,
    ];

    return response()->json($respons , $code);
    }

    public function sendSuccess ( $messages )
    {
    $respons =
    [
        'statusCode' => 200 ,
        'success' =>  true ,
        'message' => $messages,
    ];
    return response()->json($respons);
    }




    public function sendError ( $message ,  $data = [] , $code = 404)
    {

        $respons =
        [
            'statusCode' => $code ,
            'timestamp'=>now(),
            'data'  => $data ,
            'message' => $message,
        ];

        return response()->json($respons,$code);
    }


    function renameArrayKey ($array  , $oldName , $newName )
    {
        if($array[$oldName]==null)
        {
            $array[$newName] = null;
            unset( $array[$oldName] );
        }
        else{

            $array[$newName] = $array[$oldName];
            unset( $array[$oldName] );
        }

    }

    function withoutCreated_at ($array)
    {
        unset( $array['created_at'] );
        unset( $array['updated_at'] );
    }



}
