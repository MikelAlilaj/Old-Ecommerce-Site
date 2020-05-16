<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserOrderController extends Controller
{
    public function ViewOrder($id){

        $order = DB::table('orders')
            ->join('users','orders.user_id','users.id')
            ->select('orders.*','users.name','users.phone')
            ->where('orders.id',$id)
            ->first();
        /*dd($order);*/
        $shipping = DB::table('shipping')->where('order_id',$id)->first();
//        dd($shipping);

        $details = DB::table('orders_details')
            ->join('products','orders_details.product_id','products.id')
            ->select('orders_details.*','products.product_code','products.image_one')
            ->where('orders_details.order_id',$id)
            ->get();
//                    dd($details);
        return view('pages.view_order',compact('order','shipping','details'));
    }

    public function index()
    {
        return view('home');
    }
}
