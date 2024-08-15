<?php

namespace App\Http\Controllers;
use App\Models\Membacc;
use Illuminate\Http\Request;
use App\Models\Member;
// use App\Models\Subscripton;
// use App\Models\Type;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash;
// use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;



class MemberController extends Controller
{
    //
    public function store(Request $request)
        {
            $sub = new Member([
                'fname' =>$request->input('fname'),
                'lname' =>$request->input('lname'),
                'event' =>$request->input('event'),
                'details' =>$request->input('details'),
                'email' =>$request->input('email'),
                'bookingdate' =>$request->input('bookingdate'),
                'bookingloc' =>$request->input('bookingloc'),
                'id'=>$request->input('id'),
                
            ]);
            $sub->save();
            return redirect('/index');
        }
        public function storemem(Request $request)
        {
            $sub1 = new Membacc([
                'name' =>$request->input('name'),
                'email' =>$request->input('email'),
                'password' =>Hash::make($request->input('password')),
                'repeatpassword' =>$request->input('repeatpassword'),
                'memb_id'=>$request->input('memb_id'),
                
            ]);
            $sub1->save();
            return redirect('/index');
        }

 
        public function loginUser(Request $request){
            $member = DB::table('membaccs')->where('email','=', $request->input('email'))->first();
            if($member){
       
                if(Hash::check($request->input('password'), $member->password)){
                    $request->session()->put('loginId', $member->id);
                return redirect('/mypage');}
                else{
                    return back()->with('fail','This password doesnt match!');
        }}
        else{
            return back()->with('fail','This email is not registered');
        }
    }
    public function logoutUser(){
        if(Session::has('loginId')){
            Session::pull('loginId');
        return redirect('/index'); 
    }

    }
    public function mypage(){
        return view('mypage');

}
    public function adminview(){
       
            return view('adminview');

    }
    public function membdetails(Request $request){
        $data=Member::all();
        $sdata['membaccs']=Membacc::all();
        
        $sdata['data']=Member::select ('members.*','membaccs.email as smember')
        ->join('membaccs','members.id','=','membaccs.memb_id')
        
        ->get();
        // return view('login',['data'=>$data]);
        return view('membdetails',$sdata);
    }

        public function delete($id)
        {
            $data=Member::find($id);
            $data->delete();
            return redirect('display');


        }
        public function showdata($id)
        {
            $data=Member::find($id);
            return view('edit',['data'=>$data]);


        }
        public function update(Request $request)
        {
            $data=Member::find($request->id);
            $data->fname=$request->fname;
            $data->lname=$request->lname;
            $data->event=$request->event;
            $data->details=$request->details;
            $data->bookingdate=$request->bookingdate;
            $data->bookingloc=$request->bookingloc;
            $data->save();
            return redirect('display');
       
        }
        public function display(){
            $members=Member::all();
            return view('display',compact('members'));
        }

}