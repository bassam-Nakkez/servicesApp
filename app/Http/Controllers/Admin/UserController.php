<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< Updated upstream
        $users = User::all();
        if($users)
        {
            return view( 'page.clients-list', compact('$users' ) )->with('success',true);

=======
        try
        {
            $users = User::all();
            return view( 'page.clients-list', compact('users' ) )->with('success',true);
>>>>>>> Stashed changes
        }

        catch(\Throwable $e)
        {
            return $e->getMessage();
        }

<<<<<<< Updated upstream
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
=======
    }

    public function search(Request $request)
    {

        //  return $request['Customer-id'];

        if(isset($request['Customer-id'])){
            $users = User::where('userID', '=', $request['Customer-id']);
        }
        else if(isset($request['Customer-id']))
        {
            $users = User::where('userID', '=', $request['Customer-name']);

        }

       return view( 'page.clients-list', compact('users' ) )->with('success',true);
>>>>>>> Stashed changes
    }


    public function block($id)
    {
        // try{



        // }
        // catch(\Throwable $e)
        // {
        //    return $e->getMessage();
        // }


    }

}
