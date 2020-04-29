<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CouponController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Coupon(){
        $coupon=DB::table('coupons')->get();
        return view('admin.coupon.coupon',compact('coupon'));
    }

    public function StoreCoupon(Request $request){
        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->insert($data);
        $notification=array(
            'messege'=>'Coupon Inserted Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeleteCoupon($id){
        DB::table('coupons')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Coupon Deleted Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function EditCoupon($id){

        $coupon=DB::table('coupons')->where('id',$id)->first();
        return view('admin.coupon.edit_coupon',compact('coupon'));
    }

    public function UpdateCoupon(Request $request, $id){
        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Coupon Updated Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('admin.coupon')->with($notification);
    }

}


