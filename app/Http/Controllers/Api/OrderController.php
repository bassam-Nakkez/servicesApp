<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComplimentOrderRequest;
use App\Models\Category;
use App\Models\ComplimentOrder;
use App\Models\Contact;
use App\Models\DoOrder;
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
use Illuminate\Support\Carbon;
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
         $orders = Order::query()->where('userID','=', $user->userID)->where('status','=' , 1)->latest()
         ->paginate($request['limit']);

         $tempArray = array();
         for ( $i=0 ; $i<count($orders->items()) ; $i++ ) { // for every order
            $orders[$i]['id']=(String)$orders[$i]['orderID'];
             $lines= $orders->items()[$i]->line;
             unset( $orders->items()[$i]['line']); // remove line index from order

             for ( $j=0 ; $j<count($lines) ; $j++ ) { // for every line

             // change line atrebuits to send
             $line['id'] = (String)$lines[$j]['lineID'];
             $line['fk_product'] =  $lines[$j]['fk_product'];
             $product = Product::query()->where('productID','=' , $line['fk_product'])->get();
             $line['product_label'] = $product[0]['lable'];
             $options = LineOptions::query()->where('lineID','=', $lines[$j]['lineID'])->get();
             $line['array_options'] =  $options;
             $line['date_start']  =  $lines[$j]['dateStart']; // end line atrebuit

            // $line['date_start']    = Carbon::parse( $lines[$j]['date_start']);

              array_push($tempArray , $line);
              $orders[$i]['lines'] = $tempArray;

              // change product atrebuits to send
              $send = $product[0]->category;
              $send['id']=(String)$send['categoryID'];
              $this->withoutCreated_at($send); // send data without create_at and update_at
              $orders[$i]['category']= $send;
         }
     }
         $success['result'] = $orders->items();
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
         ->where('userID','=', $user->userID)
         ->where('status' , '=' , 0)
         ->latest()->paginate($request['limit']); // >>>> status = 0

         $tempArray = array();

         for ( $i=0 ; $i<count($orders->items()) ; $i++ ) { // for every order
            $orders[$i]['id']=(String)$orders[$i]['orderID'];
             $lines= $orders->items()[$i]->line;
             unset( $orders->items()[$i]['line']); // remove line index from order
            $orders->items()[$i]['isRecurrent']=(bool)$orders->items()[$i]['isRecurrent'];
             for ( $j=0 ; $j<count($lines) ; $j++ ) { // for every line

             // change line atrebuits to send
             $line['id'] = (String)$lines[$j]['lineID'];
             $line['fk_product'] =  $lines[$j]['fk_product'];
             $product = Product::query()->where('productID','=' , $line['fk_product'])->get();
             $line['product_label'] = $product[0]['lable'];
             $options = LineOptions::query()->where('lineID','=', $lines[$j]['lineID'])->get();
             $line['array_options'] =  $options;
             $line['date_start']    =  $lines[$j]['date_start']; // end line atrebuit

            // $line['date_start']    = Carbon::parse( $lines[$j]['date_start']);

              array_push($tempArray , $line);
              $orders->items()[$i]['lines'] = $tempArray;

              // change product atrebuits to send
              $send = $product[0]->category;
              $send['id']=(String)$send['categoryID'];
              $this->withoutCreated_at($send); // send data without create_at and update_at
              $orders->items()[$i]['category']= $send;
         }
     }
         $success['result'] = $orders->items();
         return $this->sendRespons($success , "GET ORDER LIST" );
    }
     catch (\Throwable $th) {
        return $this->sendError( $th->getMessage() ,'no data', 404);
    }
}





    //------------ <<<<  Create Service  >>>>-----------------


    public function CreateService(Request $request)
    {

        DB::beginTransaction();
        try{
        ExtraInfoForPayment::create($request['extraInfoForPayment']);
        unset( $request['extraInfoForPayment'] ); // remove extraInfoForPayment from request
        $line = $request['lines']; // get line from request and put it in $line
        unset($request['lines']);  // remove line from request
        $this->renameArrayKey($request , 'contactId' , 'contactID');
        $request['contactID'] = intval($request['contactID']);
        $request['date'] = Carbon::parse($request['date']);
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
        DB::commit();
        return $this->sendRespons(['result'=>$order->orderID],'service created successfully');
        }
      catch (\Throwable $th) {
        DB::rollBack();
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
          return  $this->sendRespons(['result'=>$orderId],"ORDER Created successfully",201);
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

        return  $this->sendRespons(['result'=>$orderId],"ORDER Created successfully",201);

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
             $order[$i]['date']=(int)$order[$i]['date'];
             $order[$i]['date_Commande']=(int)$order[$i]['date_Commande'];
             $options = LineOptions::query()->where('lineID','=', $lines[$i]['lineID'])->get();
             $lines[$i]['array_options'] =  $options;
             $lines[$i]['id']=(String)$lines[$i]['lineID'];
             $lines[$i]['date_end']=(int)$lines[$i]['dateEnd'];
             $lines[$i]['date_start']=(int)$lines[$i]['dateStart'];
             $lines[$i]['subprice']=$lines[$i]['subPrice'];

             $product = Product::query()->where('productID','=' , $lines[$i]['fk_product'])->get();
             if($product)
             {
                $lines[$i]['product_label'] = $product[0]['lable'];
                $lines[$i]['product_desc'] = $product[0]['description'];
             }
             else{$lines[$i]['product_label'] = null;
            }

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
        $request['date'] = Carbon::parse($request['date']);
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




public function subscription(Request $request)
{
    try{

        ExtraInfoForPayment::create($request['extraInfoForPayment']);
        unset( $request['extraInfoForPayment'] ); // remove extraInfoForPayment from request
        $line = $request['lines']; // get line from request and put it in $line
        unset($request['lines']);  // remove line from request
        $this->renameArrayKey($request , 'contactId' , 'contactID');
        $request['contactID'] = intval($request['contactID']);
        $request['date'] = Carbon::parse($request['date']);
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



    public function complimentOrder(ComplimentOrderRequest $request) {
        try {
            $compliment=ComplimentOrder::query()->create($request->all());
            return parent::sendRespons(["result"=>$compliment->complimentOrderId],"send Compliment thank you",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 342'],$th->getMessage(),404);
        }

    }

    public function doOrder(ComplimentOrderRequest $request) {
        try {
            $compliment=DoOrder::query()->create($request->all());
            $statusOrder=Order::query()->findOrFail($request->orderId);
            $statusOrder->status=1;
            $statusOrder->save();
            return parent::sendRespons(["result"=>$compliment->doOrderId],"send report work",200);
        } catch (\Throwable $th) {
            return parent::sendError(['error in DB CategoryController line 342'],$th->getMessage(),404);
        }

    }

}
