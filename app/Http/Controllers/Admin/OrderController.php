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

            $orders = Order::query()->with('user',function($q){
                $q->select(['userID','firstName']);
            })->with('employ',function($q){
                $q->select(['userID','firstName']);
            })->latest()->get();

            foreach ($orders as  $value) {
                $lines=$value->line;
                $lines[0]->product;
            }
            return view('page.order')->with('orders',$orders);

        }
        catch( \Throwable $e){
            return $e->getMessage();
        }

    }

    public function show (int $orderID)
    {

        try{

            $order = Order::query()->findOrFail($orderID);
                $order->user;
                $order->employ;
                $lines=$order->line;
                $lines[0]->product;
                $order->doOrder;


            return view('page.order-view')->with('order',$order);

        }
        catch( \Throwable $e){
            return $e->getMessage();
        }

    }






}
