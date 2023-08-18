<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Line;
use App\Models\LineOptions;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{





    public function history()
    {

       // $user = Auth::user();
       //$id = Auth::id();
        $orders = Order::query()->where('userID','=', 1)->get();

        $tempArray = array();
        for ( $i=0 ; $i<count($orders) ; $i++ ) { // for every order

            $lines= $orders[$i]->line;
            unset( $orders[$i]['line']); // remove line index from order

            for ( $j=0 ; $j<count($lines) ; $j++ ) { // for every line

            // change line atrebuits to send
            $line['id'] = $lines[$j]['lineID'];
            $line['fk_product'] =  $lines[$j]['fk_product'];
            $options = LineOptions::query()->where('lineID','=', $lines[$j]['lineID'])->get();
            $line['array_options']= $options;
            $line['date_start'] =  $lines[$j]['date_start'];// end line atrebuit


             array_push($tempArray , $line);
             $orders[$i]['lines'] = $tempArray;
             $product = Product::query()->where('productID' ,'=' , $line['fk_product'])->get();

             // change product atrebuits to send
             $send = $product[0]->category;
             $this->renameArrayKey($send , 'categoryID' , 'id');
             $this->withoutCreated_at($send); // send data without create_at and update_at
             $orders[$i]['category']= $send;
        }

         }

        // array_change_key_case()

        $success['result'] = $orders;
        return $this->sendRespons($success , "GET ORDER LIST"  );

    }


}
