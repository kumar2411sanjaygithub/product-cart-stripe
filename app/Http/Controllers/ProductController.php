<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Redirect;
class ProductController extends Controller
{
	 /**
     * Show Product list
     *
     * @return void
     */
	public function index( Request $request)
	{
		try
		{
			$productData = json_decode(file_get_contents('https://fakestoreapi.com/products'),true);
			$cartData = DB::table('cart_temps')->select("*")->select(DB::raw('count(id) as items'))->where(['session_id'=>session()->getId()])->first();

			 return view('product',['productData'=>$productData,'cartData'=>$cartData]);
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}

	 /**
     * Product add to cart
     *
     * @return void
     */	
    public function addToCart(Request $request,$id)
    {
    	try
	    {
	        $getcartvalue = DB::table('cart_temps')->where(['session_id'=>session()->getId()])->where('product_id',$id)->first();
			$product = json_decode(file_get_contents('https://fakestoreapi.com/products/'.$id),true);
	        if($getcartvalue)
	        {
		        $query = DB::table('cart_temps')->where([
	                                'session_id'=>session()->getId(),
	                                'id'=>$getcartvalue->id,
	                            ])->update([
		            'unit_price'=>$product['price'],
		            'qty'=>$getcartvalue->qty+1,
		            'price'=>$product['price'],
		            'total_price'=>$product['price']*($getcartvalue->qty+1),
		            'created_at'=>date('Y-m-d H:i:s'),
		        ]);
	        }
	        else
	        {
		        $query = DB::table('cart_temps')->insert([
		            'session_id'=>session()->getId(),
		            'product_id'=>$product['id'],
		            'product_name'=>$product['title'],
		            'product_image'=>$product['image'],
		            'unit_price'=>$product['price'],
		            'qty'=>1,
		            'price'=>$product['price'],
		            'total_price'=>$product['price'],
		            'created_at'=>date('Y-m-d H:i:s'),
		        ]);
	        }

	        if($query)
	        {
	            return redirect()->back()->with('success', 'Added to cart successfully.');
	        }
	        else
	        	return redirect()->back()->with('error','Something wrong, Try later.');
	    }
	    catch(\Exception $e)
		{
			return $e->getMessage();
		}
    }

	 /**
     * Show Cart list
     *
     * @return void
     */    
	public function cart( Request $request)
	{
		try
		{
			$productData = json_decode(file_get_contents('https://fakestoreapi.com/products'),true);

	        $cartData = DB::table('cart_temps')->select("*")->where(['session_id'=>session()->getId()])->get();
			 return view('cart',['cartData'=>$cartData,'productData'=>$productData]);			
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
	}
	 /**
     *  Add User Information and Create order
     *
     * @return void
     */	
    public function SaveDetails(Request $request)
    {
    	try
    	{
	        $user = DB::table('users')->where(['email'=>$request->email])->first();
	        $totalAmt = DB::table('cart_temps')->where(['session_id'=>session()->getId()])->get()->sum('total_price');
	        if($user)
	        {
			  //return view('stripe',['user'=>$user,'amt'=>$totalAmt]);
	        }
	        else
	        {
		        $user = DB::table('users')->insert([
		            'name'=>$request->name,
		            'email'=>$request->email,
		            'created_at'=>date('Y-m-d H:i:s'),
		        ]);
				//return view('stripe',['user'=>$user,'amt'=>$totalAmt]);
	        }
	        if($totalAmt)
	        {
				$cartItem = DB::table('cart_temps')->select('*')->where(['session_id'=>session()->getId()])->get();
				$order_id = DB::table('orders')
				->insertGetId([
					'user_id'=>$user->id,
					'session_id'=>session()->getId(),
					'total'=>$totalAmt,
					'grand_total'=>$totalAmt,
					'name'=>$user->name,
					'email'=>$user->email,
					'order_status'=>'Pending',
					'payment_status'=>'Pending',
					'payment_mode'=>'online',
					'created_at'=>date("Y-m-d H:i:s")
				]);
				Session::put(['order_id' => $order_id]);
				foreach ($cartItem as $item) {
					DB::table('carts')
					->insert([
						'user_id'=>$user->id,
						'session_id'=>session()->getId(),
						'order_id'=>$order_id,
						'product_id'=>$item->product_id,
						'product_name'=>$item->product_name,
						'product_image'=>$item->product_image,
						'unit_price'=>$item->unit_price,
						'qty'=>$item->qty,
						'price'=>$item->price,
						'total_price'=>$item->total_price,
						'name'=>$item->name,
						'email'=>$item->email,
						'status'=>'APPROVED',
						'created_at'=>date("Y-m-d H:i:s")
					]);
				}
		        return \Redirect::route('stripe');        	
	        }
	        else
	        {
		        return \Redirect::route('product');        	
	        }
	    }
	    catch(\Exception $e)
		{
			return $e->getMessage();
		}    
    }


}
