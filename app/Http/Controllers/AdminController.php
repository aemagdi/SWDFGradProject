<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; //
use App\Models\Food; //
use Illuminate\Http\Request; //
use App\Models\User; //
use App\Models\Reservation;
use App\Models\chef; //
use App\Models\Order;
use App\Models\Cart; //
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

public function __construct() {
    $this->middleware('Adminpages');
}



    public function showUsers(){
            $data=user::all();
            return view('admin.user', compact("data"));}


    public function deleteUsers($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();}




    public function foodMenu(){
        $data= Food::all();
        return view('admin.foodmenu', compact("data"));}



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

    public function deleteMenu($id){
        $data=Food::find($id);
        $data->delete();
        return redirect()->back();}


    public function editMenu($id){
            $data=Food::find($id);
            return view('admin.editmenu', compact("data"));}


     public function updateFood(Request $request, $id){
        $data=Food::find($id);
        $data->title= $request->title;
        $data->price= $request->price;
        $data->description= $request->description;
        $image = $request->image;
        if(isset($image)){
         $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimages',$imagename);
        $data->image =$imagename;
        }

        $data->save();
        // return view('admin.foodmenu');
        return redirect('foodmenu');
    }


    public function viewReservations(){
        $data = Reservation::all();
        return view('admin.adminreservations', compact("data"));
    }


    public function addChefs(Request $request){
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

    public function viewChefs(){
        $data = chef::all();
        return view('admin.adminchefs', compact("data"));
    }


    public function deleteChef($id){
        $data=chef::find($id);
        $data->delete();
        return redirect()->back();}


        public function editChef($id){
            $data=chef::find($id);
            return view('admin.editchef', compact("data"));}

    public function updateChef(Request $request, $id){
        $data=chef::find($id);
        $data->name=$request->name;
        $data->description=$request->description;
        $image=$request->image;
        if(isset($image)){
         $imagename=time().".".$image->getClientOriginalExtension();
        $request->image->move('chefimages',$imagename);
        $data->image=$imagename;
        }

        $data->save();
        return redirect('viewchefs'); }

        //function for admin to go their dashboard
        public function adminDashboard (){

            return view('admin.adminhome');}


        public function confirmOrder(Request $request){

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
            if(isset($userID)){
            $data2=Cart::select('*')->where('user_id','=',$userID)->get();
            $data2->each->delete();
                }

            return redirect()->back()->with('confirmOrderMessage','Your order has been sent to our kitchen. Expect a call from our delivery agent!');}





            public function viewOrders(){
                $data = Order::all();
                return view('admin.vieworders', compact("data"));
            }


            public function searchOrders(Request $request){

                $keyword=$request->search;

                $data = Order::where('name','Like','%'.$keyword.'%')
                ->orWhere('foodname','Like','%'.$keyword.'%')
                ->orWhere('phone','Like','%'.$keyword.'%')
                ->orWhere('address','Like','%'.$keyword.'%')->get();
                return view('admin.vieworders', compact("data","keyword"));
            }

    public function createAdmin() // To add user as an admin
    {
        return view('admin.addmember');

    }
     public function addNewAdmin(Request $request) // To add user as an admin
     {

            $data =new user;

            $data->name=$request->name;

            $data->email=$request->email;

            $data->password=bcrypt($request->password);

            $data->usertype='1';

            $data->save();

            return redirect()->back();
        }


        public function deleteReservationAdmin($id){
            $data=Reservation::find($id);
            $data->delete();
            return redirect()->back();}

        public function deleteOrderAdmin($id){
            $data=Order::find($id);
            $data->delete();
            return redirect()->back();}

        }


