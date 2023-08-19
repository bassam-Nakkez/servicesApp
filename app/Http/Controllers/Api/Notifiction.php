<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class Notifiction extends Controller
{
    public function send($id) {
            $driver = User::query()->find($id);

            $token_1= $driver['API-KEY'];


            $SERVER_API_KEY = 'AAAAZjzVoDU:APA91bHjhFq5plNbsLkFZugyXxeVa46yR_pTRptyJcGyYetyu4oIF1SOEWreMovJPsmw7ayHZLaCZVH3FmDpPZd9EpBbT3v-CXCr2X0pwTnB1YBx85yaFiyPkaEmkrCFRoWwDpbV6w6_';

            //$token_1 = 'Test Token';

            $data = [
                "registration_ids" => [
                    $token_1
                ],

                "notification" => [

                    "title" => 'Welcome',

                    "body" => 'Description',

                    "sound"=> "default" // required for sound on ios
                ],

            ];

            $dataString = json_encode($data);

            $headers = [

                'Authorization: key=' . $SERVER_API_KEY,

                'Content-Type: application/json',

            ];

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

            curl_setopt($ch, CURLOPT_POST, true);

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

            $response = curl_exec($ch);

            return response()->json(['massge'=>'plase wit driver','data'=>$token_1]);
    }
}
