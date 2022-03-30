<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Reservation;
use App\Models\chef;
use App\Models\Order;
use App\Models\Cart;
use PhpParser\Node\Stmt\Foreach_;

class AdminController extends Controller
//Safe guard in every function to prevent regular user from accessing admin's pages
// $usertype=Auth::user()->usertype;
//             if (isset(Auth::user()->usertype) && (Auth::user()->usertype) == '1'){
//             }
//             else{
//                 return redirect()->back();
//             }

{
    public function user(){
            if (isset(Auth::user()->usertype) && (Auth::user()->usertype) == '1'){
            $data=user::all();
            return view('admin.user', compact("data"));}
            else{
                return redirect()->back();
            }
        }

    public function deleteuser($id){
        $usertype=Auth::user()->usertype;
            if (isset(Auth::user()->usertype) && (Auth::user()->usertype) == '1'){
            $data=user::find($id);
        $data->delete();
        return redirect()->back();}
            else{
                return redirect()->back();
            }
        }


    public function foodmenu(){
        $usertype=Auth::user()->usertype;
            if (isset(Auth::user()->usertype) && (Auth::user()->usertype) == '1'){
            $data= Food::all();
        return view('admin.foodmenu', compact("data"));}
            else{
                return redirect()->back();
            }
        }

    public function uploadFood(Request $request){
        $data = new food;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimages',$imagename);
        $data->image =$imagename;
        $data->title= $request->title;
        $data->price= $request->price;
        $data->description= $request->description;
        $data->save();
        return redirect()->back();
    }

    public function deletemenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();}


    public function editmenu($id){
            $data=Food::find($id);
            return view('admin.editmenu', compact("data"));}


     public function updatefood(Request $request, $id){
        $data=Food::find($id);
        $data->title= $request->title;
        $data->price= $request->price;
        $data->description= $request->description;
        $image = $request->image;
        if($image){
         $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimages',$imagename);
        $data->image =$imagename;
        }

        $data->save();
        // return view('admin.foodmenu');
        return redirect('foodmenu');
    }

    public function reservation(Request $request){
        $data = new Reservation;

        $data->name =$request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->guest= $request->guest;
        $data->time= $request->time;
        $data->date= $request->date;
        $data->message= $request->message;
        $data->save();
        return redirect()->back()->with('message2','Your reservation has been added recorded and we will be in touch shortly!');
    }

    public function vieweservations(){
        $data = Reservation::all();
        return view('admin.adminreservations', compact("data"));
    }


    public function addchefs(Request $request){
        $data = new chef();
        $data->name =$request->name;
        $data->description= $request->description;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimages',$imagename);
        $data->image =$imagename;

        $data->save();
        return redirect()->back();
    }

    public function viewchefs(){
        $data = chef::all();
        return view('admin.adminchefs', compact("data"));
    }


    public function deletechef($id){
        $data=chef::find($id);
        $data->delete();
        return redirect()->back();}


        public function editchef($id){
            $data=chef::find($id);
            return view('admin.editchef', compact("data"));}

    public function updatechef(Request $request, $id){
        $data=chef::find($id);
        $data->name=$request->name;
        $data->description=$request->description;
        $image=$request->image;
        if($image){
         $imagename=time().".".$image->getClientOriginalExtension();
        $request->image->move('chefimages',$imagename);
        $data->image=$imagename;
        }

        $data->save();
        return redirect('viewchefs'); }

        public function confirmorder(Request $request){

            foreach ($request->foodname as $key=>$foodname){

            $data = new Order();
            $data->foodname = $foodname;
            $data->price = $request -> price[$key];
            $data->quantity = $request -> quantity[$key];
            $data->name = $request-> name;
            $data->phone = $request-> phone;
            $data->address = $request-> address;
            $data->save();}

            $userID = Auth::id();
            if($userID){
            $data2=Cart::select('*')->where('user_id','=',$userID)->get();
            $data2->each->delete();
                }

            return redirect()->back()->with('confirmOrderMessage','Your order has been sent to our kitchen. Expect a call from our delivery agent!');}





            public function vieworders(){
                $data = Order::all();
                return view('admin.vieworders', compact("data"));
            }


            public function searchorders(Request $request){

                $keyword=$request->search;

                $data = Order::where('name','Like','%'.$keyword.'%')
                ->orWhere('foodname','Like','%'.$keyword.'%')
                ->orWhere('phone','Like','%'.$keyword.'%')
                ->orWhere('address','Like','%'.$keyword.'%')->get();
                return view('admin.vieworders', compact("data","keyword"));
            }

    public function create() // To add user as an admin
    {
        return view('admin.addmember');

    }
     public function addnewadmin(Request $request) // To add user as an admin
     {

            $data =new user;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->password=bcrypt($request->password);

            $data->usertype='1';

            $data->save();

            return redirect()->back();
        }


        }


