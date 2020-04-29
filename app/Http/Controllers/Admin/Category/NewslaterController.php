<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewslaterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Newslater(){
        $sub=DB::table('newslaters')->get();
        return view('admin.newslater.newslater',compact('sub'));
    }

    public function DeleteSub($id){
        DB::table('newslaters')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Subscriber Deleted Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
