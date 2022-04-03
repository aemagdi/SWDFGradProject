<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Food;
use App\Models\Chef;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Reservation;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = food::all();
        $data2 = Chef::all();
        $user_id = Auth::id();

        if (isset($user_id)) {
            $count = Cart::where("user_id", $user_id)->count();
            return view("home", compact("data", "data2", "count"));
        } else {
            return view("home", compact("data", "data2"));
        }
    }

    public function redirects()
    {
        $data = food::all();
        $data2 = Chef::all();
        $user_id=Auth::id();
        // $usertype=Auth::user()->usertype;
        if (isset(Auth::user()->usertype) && (Auth::user()->usertype == '1')) {
            return view('admin.adminhome');
        } else if (isset($user_id)) {
            $count = Cart::where("user_id", Auth::id())->count();
            return view('home', compact("data", "data2", "count"));
        } else {
            return view('home', compact("data", "data2"));
        }
    }

    public function addReservation(Request $request)
    {
        $data = new Reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->time = $request->time;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->save();
        return redirect()->back()->with('message2', 'Your reservation has been added recorded and we will be in touch shortly!');
    }

    public function addToCart(Request $request, $id)
    {
        $user_id=Auth::id();
        $food_id = $id;
        $quantity = $request->quantity;
        if ((isset($user_id))) {
 
            // $doesItemExist->count(); //to get count
            // ($doesItemExist[0]->quantity); //to get old quantity value
 
            //asking DB if item was added before in the cart
            $doesItemExist = DB::table('carts')
            ->where('user_id', '=', $user_id)
            ->where('food_id', '=', $id)
            ->get();
 
            //if item was added before
            if( ($doesItemExist->count())>0 ){
                $existingCartItemId = $doesItemExist[0]->id;
                $existingCartItemQuantity = $doesItemExist[0]->quantity;
                //incrementing quantity value in DB
                $existingCartItem = Cart::find($existingCartItemId);
                $existingCartItem->quantity = $existingCartItemQuantity + $quantity;
                $existingCartItem->save();
            }
 
            //if item was not added before
            else{
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();
            }
 
            return redirect()->back()->with('message', 'Item has been added to the cart successfully.');
        }
        else {
            return redirect('/login');
        }
    }
    // Request $request,
    public function showCart($id )
    {       
        //here id is userID
        if (Auth::id() == $id) {
            $count = Cart::where("user_id", $id)->count();
            $data = Cart::where("user_id", $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
            // dd($data);
            $data2 = Cart::select('*')->where('user_id', '=', $id)->get();

            // $AllItemsPrice=Cart::select('*')->where("user_id",$id)->join(('food','carts.food_id','=','food.id')->sum('('food.price' * 'carts.quantity')');
            // ,"AllItemsPrice"

            $totalPrice = DB::table('carts')->join('food', 'carts.food_id', '=', 'food.id')
                ->select(DB::raw('sum(food.price*carts.quantity) AS totalPrice'))
                ->where('carts.user_id', '=', $id)->first();
            return view('showcart', compact("data", "count", "data2", "totalPrice"));
        } else {
            return redirect()->back();
        }
    }


    public function deleteCartItem($id)
    {
        //,'&','created_at','=', $created_at
        
        // select('*')->where('user_id', '=', $id)
        // $data = Cart::select('*')->where('food_id', '=',$id,'&', 'created_at','=', $created_at)->get();
        // $data->delete();
        // return redirect()->back()->with('message', 'Item has been removed successfully.');


            //Original
        $data = Cart::where("food_id", $id)->get();
        $data->each->delete();
        return redirect()->back()->with('message', 'Item has been removed successfully.');

    }



    public function confirmOrder(Request $request)
    {

        foreach ($request->foodname as $key => $foodname) {

            $data = new Order();
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }

        $userID = Auth::id();
        if (isset($userID)) {
            $data2 = Cart::select('*')->where('user_id', '=', $userID)->get();
            $data2->each->delete();
        }

        return redirect()->back()->with('confirmOrderMessage', 'Your order has been sent to our kitchen. Expect a call from our delivery agent!');
    }

    public function emptyCart($id)
    {
        $userID = Auth::id();
        if (isset($userID)) {
            $data2 = Cart::select('*')->where('user_id', '=', $userID)->get();
            $data2->each->delete();
    }
    return redirect()->back()->with('confirmOrderMessage', 'Your cart has been emptied!');
}
// $usertype=Auth::user()->usertype;
//             if ($usertype == '1'){
//             }
//             else{
//                 return redirect()->back();
//             }
}