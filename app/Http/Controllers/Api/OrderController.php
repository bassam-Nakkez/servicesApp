<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\ExtraInfoForPayment;
use App\Models\Line;
use App\Models\LineOptions;
use App\Models\Order;
use App\Models\Product;
use App\Models\RatingOrder;
use App\Models\User;
use Faker\Provider\ar_EG\Payment;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class OrderController extends Controller
{




    //------------ <<< get history of user's orders  >>>-----

    public function history(Request $request)
    {
        try{
        $user = Auth::user();
        //$id = Auth::id();
         $orders = Order::query()->where('userID', $user->id)->where('status' , 1)
         ->limit($request['limit'])->latest()->get();

         $tempArray = array();
         for ( $i=0 ; $i<count($orders) ; $i++ ) { // for every order
             $lines= $orders[$i]->line;
             unset( $orders[$i]['line']); // remove line index from order

             for ( $j=0 ; $j<count($lines) ; $j++ ) { // for every line

             // change line atrebuits to send
             $line['id'] = $lines[$j]['lineID'];
             $line['fk_product'] =  $lines[$j]['fk_product'];
             $product = Product::query()->where('productID','=' , $line['fk_product'])->get();
             $line['product_label'] = $product[0]['lable'];
             $options = LineOptions::query()->where('lineID','=', $lines[$j]['lineID'])->get();
             $line['array_options'] =  $options;
             $line['date_start']    =  $lines[$j]['date_start']; // end line atrebuit

              array_push($tempArray , $line);
              $orders[$i]['lines'] = $tempArray;

              // change product atrebuits to send
              $send = $product[0]->category;
              $this->renameArrayKey($send , 'categoryID' , 'id');
              $this->withoutCreated_at($send); // send data without create_at and update_at
              $orders[$i]['category']= $send;
         }
     }
         $success['result'] = $orders;
         return $this->sendRespons($success , "GET ORDER LIST" );
        }
        catch (\Throwable $th) {
            return $this->sendError( $th->getMessage() ,'no data', 404);
        }
}




    //------------<<<<<  upcomming  >>>>>>--------

    public function upcomming (Request $request)
    {
        try {
        $user = Auth::user();
        //$id = Auth::id();
         $orders = Order::query()
         ->where('userID','=', $user->id)
         ->where('status' , '=' , 0)
         ->where('isRecurrent','=' , 1)
         ->limit($request['limit'])->latest()->get(); // >>>> status = 0

         $tempArray = array();
         for ( $i=0 ; $i<count($orders) ; $i++ ) { // for every order
             $lines= $orders[$i]->line;
             unset( $orders[$i]['line']); // remove line index from order

             for ( $j=0 ; $j<count($lines) ; $j++ ) { // for every line

             // change line atrebuits to send
             $line['id'] = $lines[$j]['lineID'];
             $line['fk_product'] =  $lines[$j]['fk_product'];
             $product = Product::query()->where('productID','=' , $line['fk_product'])->get();
             $line['product_label'] = $product[0]['lable'];
             $options = LineOptions::query()->where('lineID','=', $lines[$j]['lineID'])->get();
             $line['array_options'] =  $options;
             $line['date_start']    =  $lines[$j]['date_start']; // end line atrebuit

              array_push($tempArray , $line);
              $orders[$i]['lines'] = $tempArray;

              // change product atrebuits to send
              $send = $product[0]->category;
              $this->renameArrayKey($send , 'categoryID' , 'id');
              $this->withoutCreated_at($send); // send data without create_at and update_at
              $orders[$i]['category']= $send;
         }
     }
         $success['result'] = $orders;
         return $this->sendRespons($success , "GET ORDER LIST" );
    }
     catch (\Throwable $th) {
        return $this->sendError( $th->getMessage() ,'no data', 404);
    }
}





    //------------ <<<<  Create Service  >>>>-----------------


    public function CreateService(Request $request)
    {

        try{

        ExtraInfoForPayment::create($request['extraInfoForPayment']);
        unset( $request['extraInfoForPayment'] ); // remove extraInfoForPayment from request
        $line = $request['lines']; // get line from request and put it in $line
        unset($request['lines']);  // remove line from request
        $this->renameArrayKey($request , 'contactId' , 'contactID');
        $request['contactID'] = intval($request['contactID']);
        $order = Order::create($request->all());

        for($i=0 ; $i < count( $line ) ; $i++)
        {
            $line[$i]['fk_product'] = $line[$i]['productId'];
            unset($line[$i]['productId']);
            $line[$i]['$orderID'] = $order->orderID;
            //$options = $line[$i]['arrayOptions'];  // get arrayOptions from line array
            //unset($line[$i]['arrayOptions']);  // remove arrayOption after put it in $option varible
            Line::create($line[$i]);
           // LineOptions::create($options);
        }

        return $this->sendSuccess('service created successfully');
        }
      catch (\Throwable $th) {
      return $this->sendError( $th->getMessage() ,'no data', 404);
   }

}



//------------ <<<<  Rating Order >>>>-----------------


public function rating(Request $request , $orderId , $lineId)
{

    try{

    $input = $request['ratingOps'];
    $input['orderID'] = $orderId;
    $input['lineID']  = $lineId;

    if ( !RatingOrder::query()->where('orderID','=',$orderId)->where('lineID','=',$lineId)->exists())
    {
        if(Line::query()->where('orderID','=',$orderId)->where('lineID','=',$lineId)->exists())
        {
            RatingOrder::create($input);
          return  $this->sendSuccess('order rating successfully');
        }
        else
        {
            return $this->sendError(' order not exists ');
        }
    }
    else
    {
        RatingOrder::where('orderID', $orderId)
        ->where('lineID', $lineId)
        ->update($input);

        return  $this->sendSuccess('order rating successfully');

    }

    }
    catch (\Throwable $th) {
        return $this->sendError( $th->getMessage() ,'no data', 404);
     }
}




//----------------<<< get order's details >>>>>---------------

public function orderDetails(Request $request , $orderId)
{
    try{

    if(Order::query()->where('orderID', $orderId)->exists())
    {
         $order = Order::query()
         ->where('orderID', $orderId)
         ->get();

        $lines =  $order[0]['lines']= $order[0]->line;
        unset( $order[0]['line']); // remove line index from order
             for ( $i=0 ; $i<count($lines) ; $i++ ) { // for every line
             // change line atrebuits to send
             $options = LineOptions::query()->where('lineID','=', $lines[$i]['lineID'])->get();
             $lines[$i]['array_options'] =  $options;
             unset($options['lineID']);
             $this->renameArrayKey($lines[$i] ,'lineID', 'id');
             $this->renameArrayKey($lines[$i] ,'product_desc', 'desc' );
             $product = Product::query()->where('productID','=' , $lines[$i]['fk_product'])->get();
             if(!isEmpty($product))
             {
                $lines[$i]['product_label'] = $product['lable'];
             }
             else{$lines[$i]['product_label'] = null;}

            //  Contact::query()->where('contactID' , $order[0]['contactID'])->get();
            // $this->renameArrayKey($order[0]['contactID'], 'contacts_ids','contactID');
    }
         $success['result'] = $order[0];
         return $this->sendRespons($success , "ORDER Created successfully" );
      }
    }
    catch (\Throwable $th) {
        return $this->sendError( $th->getMessage() ,'no data', 404);
     }

}




//------------- <<<  save Service  >>>>

public function saveService(Request $request)
{
    try{

        ExtraInfoForPayment::create($request['extraInfoForPayment']);
        unset( $request['extraInfoForPayment'] ); // remove extraInfoForPayment from request
        $line = $request['lines']; // get line from request and put it in $line
        unset($request['lines']);  // remove line from request
        $this->renameArrayKey($request , 'contactId' , 'contactID');
        $request['contactID'] = intval($request['contactID']);
        
        $order = Order::create($request->all());

        for($i=0 ; $i < count( $line ) ; $i++)
        {
            $line[$i]['fk_product'] = $line[$i]['productId'];
            unset($line[$i]['productId']);
            $line[$i]['$orderID'] = $order->orderID;
            //$options = $line[$i]['arrayOptions'];  // get arrayOptions from line array
            //unset($line[$i]['arrayOptions']);  // remove arrayOption after put it in $option varible
            Line::create($line[$i]);
           // LineOptions::create($options);
        }

        return $this->sendSuccess('service saved successfully');
        }
      catch (\Throwable $th) {
      return $this->sendError( $th->getMessage() ,'no data', 404);
   }
}








}
