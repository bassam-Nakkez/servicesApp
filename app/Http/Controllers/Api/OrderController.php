<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ExtraInfoForPayment;
use App\Models\Line;
use App\Models\LineOptions;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Faker\Provider\ar_EG\Payment;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{




    //------------get history user's orders

    public function history(Request $request)
    {
        try{
        $user = Auth::user();
        //$id = Auth::id();
         $orders = Order::query()->where('userID','=', 1)->where('status' , '=' , 1)
         ->limit($request['limit'])->latest()->get();

         $tempArray = array();
         for ( $i=0 ; $i<count($orders) ; $i++ ) { // for every order
             $this->logicValue($orders[$i] , 'isRecurrent');
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




    //------------ upcomming
    public function upcomming (Request $request)
    {
        try {
        $user = Auth::user();
        //$id = Auth::id();
         $orders = Order::query()->where('userID','=', 1)->where('status' , '=' , 0)->where('isRecurrent','=' , 1)
         ->limit($request['limit'])->latest()->get(); // >>>> status = 0

         $tempArray = array();
         for ( $i=0 ; $i<count($orders) ; $i++ ) { // for every order
             $this->logicValue($orders[$i] , 'isRecurrent');
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


    public function CreateService(Request $request)
    {

        try{
        $payment = ExtraInfoForPayment::create($request['extraInfoForPayment']);
        unset( $request['extraInfoForPayment'] );
        $line = $request['lines'];
        unset($request['lines']);
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

        return $this->sendRespons($request  , 'service created successfully');
        }
      catch (\Throwable $th) {
      return $this->sendError( $th->getMessage() ,'no data', 404);
   }

}





}
