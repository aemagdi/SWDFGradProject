<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $data2 = Chef::all();
        $user_id = Auth::id();

        if($user_id){
        $count=Cart::where("user_id",$user_id)->count();
        return view ("home", compact("data","data2","count"));}

        else{
            return view ("home", compact("data","data2"));
        }
    }

    public function redirects(){
        $data=food::all();
        $data2 = Chef::all();
        // $usertype=Auth::user()->usertype;
        if (isset(Auth::user()->usertype)&& (Auth::user()->usertype == '1') ){
            return view('admin.adminhome');
        }
        else if(Auth::id()) {
            $count=Cart::where("user_id",$user_id)->count();
            return view('home', compact("data","data2","count"));
        }
        else{
            return view('home', compact("data","data2"));
            }

        }
    

    public function addtocart (Request $request, $id){
        if(Auth::id()){
        $user_id = Auth::id();
        $food_id=$id;
        $quantity=$request->quantity;
        $cart = new Cart;
        $cart->user_id=$user_id;
        $cart->food_id=$food_id;
        $cart->quantity=$quantity;
        $cart->save();
            return redirect()->back();
        }
        else {

            return redirect('/login');
        }
    }
    // Request $request,
    public function showcart ($id){
        if(Auth::id()==$id){
        $count=Cart::where("user_id",$id)->count();
         $data=Cart::where("user_id",$id)->join('food','carts.food_id','=','food.id')->get();
        $data2=Cart::select('*')->where('user_id','=',$id)->get();
        return view('showcart', compact("data","count","data2"));
        }
        else{
            return redirect()->back();
        }

        }


    public function deletecartitem ($id){
        $data=Cart::find($id);
        $data->delete();
        return redirect()->back();
                    }

        public function admindashboard (){
            $usertype=Auth::user()->usertype;
            if ($usertype == '1'){
            return view('admin.adminhome');}
            else{
                return redirect()->back();
            } }
}
// $usertype=Auth::user()->usertype;
//             if ($usertype == '1'){
//             }
//             else{
//                 return redirect()->back();
//             }
