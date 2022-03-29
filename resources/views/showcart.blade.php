<!DOCTYPE html>
<html lang="en">

  <head>
<base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--

TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                        <!--
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section" style="background-color:rgb(238, 132, 132)">
                                @auth <a href="{{url('/showcart', Auth::id())}}">Cart[{{$count}}] </a> @endauth @guest Cart[0] @endguest</li>

                            <li> @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                        <li><x-app-layout>
                                            </x-app-layout>
                                                            </li>
                                    @else
                                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                        @if (Route::has('register'))
                                           <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif</li>

                        </ul>
                        <a class='menu-trigger'>
                            {{-- <span>Menu</span> --}}
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



    {{-- class="container-scroller" style="position: relative; top: 150px; right:-40px" --}}
    <div id="top" >
        <table align="center" bgcolor=#e9967a border="2px">


            <tr>
                <th style="padding: 30px">Food name</th>
                <th style="padding: 30px"> Price</th>
                <th style="padding: 30px">Quantity</th>
                {{-- <th style="padding: 30px">Image</th> --}}
                {{-- <th style="padding: 30px">Action</th> --}}
                <th style="padding: 30px">Action</th>

            </tr>
    <form action="{{url('confirmorder')}}" method="POST">
        @csrf
             @foreach ($data as $data)
            <tr align="center">
                <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                <td>{{$data->title}}</td>
                <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                <td>${{$data->price}}</td>
                <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
                <td>{{$data->quantity}}</td>

                {{-- <td><img height="150" width="150" src="/foodimages/{{$data->image}}" alt="Not found"></td> --}}
                {{-- <td><a href="{{url('/editmenu',$data->id)}}">Edit</a></td> --}}
           </tr >
            @endforeach

            @foreach ($data2 as $data2)

            <tr style="position: relative; top: -50px; right:-390px">
                {{-- class="btn btn-warning" --}}
            <td><a href="{{url('/deletecartitem',$data2->id)}}" >Delete</a></td>
            </tr>
            @endforeach
        </table>
        {{-- all encompassing div --}}
        <div align="center" style="padding: 10px">
           <div>
            <button type="button" class="btn btn-primary" id="order">Order now</button>
          </div>

        <div align="center" style="padding: 10px; display:none;" id="userdetails">
            <div style="padding:10px">
                <label style="padding: 10px">Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div>
                <label style="padding: 10px">Phone number</label>
                <input type="number" name="phone" placeholder="Phone number">
            </div>
            <div>
                <label style="padding: 10px">Address</label>
                <input type="text" name="address" placeholder="Address">
            </div>
            <div>
                {{-- <input class="btn btn-info" type="submit" value="Submit"> --}}
                <button type="submit"  class="btn btn-success" > Submit</button>
                <button type="button" id="close" class="btn btn-danger">Close</button>
            </div>
        </div>
        </div>
    </div>
</form>





<script>
    //using jQuery
    $("#order").click(
    function(){
        $("#userdetails").show();
    }

    );

    $("#close").click(
    function(){
        $("#userdetails").hide();
    }

    );
</script>







 <!-- jQuery -->
 <script src="assets/js/jquery-2.1.0.min.js"></script>

 <!-- Bootstrap -->
 <script src="assets/js/popper.js"></script>
 <script src="assets/js/bootstrap.min.js"></script>

 <!-- Plugins -->
 <script src="assets/js/owl-carousel.js"></script>
 <script src="assets/js/accordions.js"></script>
 <script src="assets/js/datepicker.js"></script>
 <script src="assets/js/scrollreveal.min.js"></script>
 <script src="assets/js/waypoints.min.js"></script>
 <script src="assets/js/jquery.counterup.min.js"></script>
 <script src="assets/js/imgfix.min.js"></script>
 <script src="assets/js/slick.js"></script>
 <script src="assets/js/lightbox.js"></script>
 <script src="assets/js/isotope.js"></script>

 <!-- Global Init -->
 <script src="assets/js/custom.js"></script>
 <script>

     $(function() {
         var selectedClass = "";
         $("p").click(function(){
         selectedClass = $(this).attr("data-rel");
         $("#portfolio").fadeTo(50, 0.1);
             $("#portfolio div").not("."+selectedClass).fadeOut();
         setTimeout(function() {
           $("."+selectedClass).fadeIn();
           $("#portfolio").fadeTo(50, 1);
         }, 500);

         });
     });

 </script>
</body>
</html>
