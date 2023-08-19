<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Charge;
use Stripe\StripeClient;
use Stripe\Subscription;

class StripeController extends Controller
{


    public function StripePayment(Request $request)
    {
        $amount = $request['amount'];
        $currency = $request['currency'];
        $paymentMethod = $request['payment_method'];
        $useStripeSDK = $request['use_stripe_sdk'];
        $customerId = 'cus_OTm8ezq7b2eI1R';

        Stripe::setApiKey(config('scripe.secret'));
        try {
            if ($useStripeSDK === 'true') {
                $charge = \Stripe\Charge::create([
                    'amount' => $amount,
                    'currency' => $currency,
                    // 'payment_method' => $paymentMethod,
                    'customer' => $customerId,
                    // 'confirm' => true,
                ]);
            } else {
                $stripe = new \Stripe\StripeClient(config('scripe.secret'));
                $charge = $stripe->charges->create([
                    'amount' => $amount,
                    'currency' => $currency,
                    // 'source' => $paymentMethod,
                    'customer' => $customerId,
                ]);
            }

            return $this->sendSuccess('Payment completed successfully');
        } catch (\Throwable $th) {
            return response()->json(['success' => false, 'message' =>  $th->getMessage()]);
        }
    }




public function confirmPayment(Request $request)
    {
        $paymentIntentId = $request->input('paymentIntentId');


        Stripe::setApiKey(config('scripe.secret'));

        try {

            $paymentIntent = PaymentIntent::retrieve($paymentIntentId);
            $paymentIntent->confirm();

            return response()->json(['success' => true, 'message' => 'Payment completed successfully']);
        } catch (\Throwable $th) {


            return response()->json(['success' => false, $th->getMessage()]);
        }
    }





    public function createSubscription(Request $request)
    {
        $validator = Validator::make($request->all() ,[
            // 'paymentMethod' => 'required|string',
            'email' => 'required|string|email',
            'cancelAt' => 'required|integer',
            'interval_count' => 'required|integer',
            'price' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return $this->sendError($validator->errors(), 'no data', 404);
        }

        //\Stripe\Stripe::setApiKey(config('stripe.secret'));
        \Stripe\Stripe::setApiKey(config('scripe.secret'));
        //$apiKey = config('stripe.sp');


        $paymentMethod = $request['paymentMethod'];
        $email = $request['email'];
        $cancelAt = $request['cancelAt'];
        $intervalCount = $request['interval_count'];
        $price = $request['price'];
        $customerId = 'cus_OTm8ezq7b2eI1R';


        try {

            $subscription = \Stripe\Subscription::create([
                // 'customer' =>
                //     [
                //         'email'=>$email,
                //         'paymentMethod'=>$paymentMethod

                //     ],

                'customer' =>$customerId,
                'items' => [
                    [
                        'price' => $price,
                    ],
                ],
                'cancel_at' => $cancelAt,
                'billing_cycle_anchor' => 'now',
                'proration_behavior' => 'create_prorations',
                'metadata' => [],
            ]);

            return $this->sendSuccess('Subscription created successfully');

        } catch (\Stripe\Exception\ApiErrorException $e) {
            return $this->sendError($e->getMessage());

        }
    }



}
