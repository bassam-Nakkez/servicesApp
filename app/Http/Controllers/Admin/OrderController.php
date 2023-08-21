<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function allTask ()
    {

        try{

            $orders = Order::all();
            return view('page.order')->with('');

        }
        catch( \Throwable $e){}

    }






}
