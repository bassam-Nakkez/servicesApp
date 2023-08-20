<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\ArrayOptions;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function index() {
        try {
            $userId=Auth::id();
            $contacts=Contact::query()->where('userID','=',$userId)->get();
            for($i=0;$i<count($contacts);$i++)
            {
                $contacts[$i]->arrayOptions;
                $contacts[$i]['id']=(String)$contacts[$i]['contactID'];
                $contacts[$i]['lastname']=$contacts[$i]['lastName'];
                $contacts[$i]['zip']=(String)$contacts[$i]['zip'];
            }
            return parent::sendRespons(["result"=>$contacts],"GET Contact",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB ContactController line 26'],$th->getMessage(),404);

        }
    }

    public function add(ContactRequest $request) {
        try {
            $user=Auth::user();
            $contact=Contact::query()->create([
                'lastName'=>$request->lastname,
                'email'=>$user->email,
                'zip' =>(int)$request->zip,
                'town'=>$request->town,
                'userID'=>$user->userID,
                'address'=>$request->address
            ]);
            ArrayOptions::query()->create(
                [
                    "contactID"=>$contact->contactID,
                    "optionsLatitude"=> $request->arrayOptions['optionsLatitude'],
                    "optionsLongitude"=> $request->arrayOptions['optionsLongitude'],
                    "optionsSurfacem"=> $request->arrayOptions['optionsSurfacem2'],
                    ]
                );
            $x=Contact::query()->where('userID','=',$user->userID)->get();
            for($i=0;$i<count($x);$i++)
            {
                $x[$i]->arrayOptions;
                $x[$i]['id']=(String)$x[$i]['contactID'];
                $x[$i]['lastname']=$x[$i]['lastName'];
                $x[$i]['zip']=(String)$x[$i]['zip'];
            }
            return parent::sendRespons(["result"=>$contact->contactID],"Get contact",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB ContactController line 61'],$th->getMessage(),404);

        }
    }

    public function delete(int $contactId)  {
        try {
            ArrayOptions::query()->where('contactID','=',$contactId)->delete();
            Contact::query()->where('contactID','=',$contactId)->delete();
            return parent::sendRespons(["result"=>['data'=>null,'message'=>'the contact is Deleted successfully',
            'statusCode'=>200]],"the contact is Deleted successfully",200);

        } catch (\Throwable $th) {
            return parent::sendRespons(["result"=>['data'=>null,'message'=>$th->getMessage(),
            'statusCode'=>200]],"error in DB ContactController line 72",404);
        }
    }
}
