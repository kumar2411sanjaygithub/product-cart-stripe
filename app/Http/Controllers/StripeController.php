<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use DB;
class StripeController extends Controller
{
/**
     * Redirect to Stripe payment gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {   
        try
        {
            $orderData = DB::table('orders')->select('*')->where(['id'=>session('order_id'), 'session_id'=>session()->getId()])->first();
            if(!$orderData)
            {
                return \Redirect::route('product');
            }
            // Enter Your Stripe Secret
            \Stripe\Stripe::setApiKey('sk_test_51Jf1saSHzCNvwuRqdQ4INRLCiPbrwqH9zdzn6gtO1ZU649NNxfqtGNazwYCMsvIvdMyi58PL2Uddvd2OduoQdx6d00e6Rkbhu2');
                    
            $amount = $orderData->grand_total;
            $amount *= 100;
            $amount = (int) $amount;
            
            $payment_intent = \Stripe\PaymentIntent::create([
                'description' => 'Stripe Test Payment',
                'amount' => $amount,
                'currency' => 'INR',
                'payment_method_types' => ['card'],
            ]);
            $intent = $payment_intent->client_secret;

            return view('stripe',compact('intent','orderData'));
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }    
    }
    /**
     * Successful stripe payment response
     *
     * @return \Illuminate\Http\Response
     */
    public function afterPayment(Request $request)
    {
        try
        {
            $query = DB::table('orders')->where([
                                    'session_id'=>session()->getId(),
                                    'id'=>session('order_id')
                                ])->update([
                'payment_status'=>'Paid',
                ]);
            if($query)
            {
            $request->session()->regenerate();
            session()->forget('order_id');
            return \Redirect::route('product')->with('success', 'Payment Has been Received.');     
            }
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
