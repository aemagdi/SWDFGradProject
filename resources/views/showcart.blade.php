<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Your cart at The Parisian</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

</head>

<body style=" overflow-x: hidden;">

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
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/#about">About</a></li>

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
                            <li class="scroll-to-section"><a href="/#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="/#chefs">Chefs</a></li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li> --}}
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="/#reservation">Contact Us</a></li>

                            <li class="scroll-to-section">
                                @auth <a href="{{ url('/showcart', Auth::id()) }}">
                                    <i class="fa" style="font-size:30px" >&#xf07a;</i>
                                   <span class='badge badge-warning' id='lblCartCount'>{{ $count }} </span>
                                     </a>
                                    @endauth
                                </li>
                                <li>
                                    @if (Route::has('login'))
                                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                            @auth
                                                {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                                    <li>
                                        <x-app-layout>
                                        </x-app-layout>
                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                                    @if (Route::has('register'))
                                        <li> <a href="{{ route('register') }}"
                                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        </li>
                                    @endif
                                @endauth
                    </div>
                    @endif
                    </li>

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

        {{-- Div to alert user after Removing items From tha cart --}}
        <div id="top">
            @if (session()->get('message'))
                <div id="ItemRemoved" class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">

                    </button>
                    {{ session()->get('message') }}

                </div>
            @else
            @endif
        </div>


        {{-- Div to alert user after adding items to tha cart --}}
        <div id="top">
            @if (session()->get('confirmOrderMessage'))
                <div id="ConfirmClicked" class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">

                    </button>
                    {{ session()->get('confirmOrderMessage') }}

                </div>
            @else
            @endif
        </div>
        {{-- notAdminError --}}

        {{-- Div to alert user after trying to access admin's page --}}
        <div id="adminPages">
            @if (session()->get('notAdminError'))
                <div id="ConfirmClicked" class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">

                    </button>
                    {{ session()->get('notAdminError') }}

                </div>
            @else
            @endif
        </div>

        <!-- ***** Header Area End ***** -->



        {{-- class="container-scroller" style="position: relative; top: 150px; right:-40px" --}}
        @if ($count == 0)
            <div id="top" align="center">
                <img src="assets/images/emptycart.png" alt="Image not found. Your cart is empty anyway!">
                <button class="btn btn-primary"><a href="/#menu">Click to order</a></button>
            </div>
        @else
            <div id="top">
                <div class="container">

                <table class="table table-striped" style="background-color: bisque;" border="2px">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Food name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        {{-- <th style="padding: 30px">Image</th> --}}
                        {{-- <th style="padding: 30px">Action</th> --}}
                        <th scope="col">Action</th>

                    </tr>
                    <form class="form-horizontal" action="{{ url('confirmorder') }}" method="POST">
                        @csrf
                        @foreach ($data as $data)
                        <tbody>
                        
                            <tr>

                                <input type="text" name="foodname[]" value="{{ $data->title }}" hidden="">
                                <td>{{ $data->title }}</td>
                                <input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                                <td>${{ $data->price }}</td>
                                <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                                <td>{{ $data->quantity }}</td>
                                <td>${{ $data->price * $data->quantity }}</td>
                                <td scope="col"><a href="{{ url('/deletecartitem', $data->food_id) }}">Delete</a></td>

                                {{-- <td><img height="150" width="150" src="/foodimages/{{$data->image}}" alt="Not found"></td> --}}
                                {{-- <td><a href="{{url('/editmenu',$data->id)}}">Edit</a></td> --}}
                            </tr>
                        </thead>
                        @endforeach
                        {{-- @foreach ($data2 as $data2)
                            <tr style="position:relative; top:-100px ;left:900px;"> --}}
                                {{-- class="btn btn-warning" --}}
                                {{-- <td align="center" scope="col"><a href="{{ url('/deletecartitem', $data2->id) }}">Delete</a></td>
                            </tr> --}}
                        </tbody>
                        {{-- @endforeach --}}


                </table>
            </div>
            <div></div>
                <div align="center">
                    <div style="background-color:#e9967a; height :50px; width:300px; padding: 15px; font-weight:bold;border-radius:8px;" align="center" ><tr><td>  Total Price = ${{$totalPrice->totalPrice}}</td> </tr></div>
                </div>

                {{-- all encompassing div --}}
                <div align="center" style="padding: 10px">
                    <div>
                        <button type="button" style="background-color: blue; width:120px;height:45px;border-radius:8px; color:white" id="order">Order Now</button>
                        <button type="button" style="background-color: red; width:120px;height:45px;border-radius:8px; color:white" id="order"> <a href="{{ url('/emptycart', $data->user_id) }}" style="color: white">Empty Cart</a></button>
                    </div>

                    <div align="center" style="padding: 10px; display:none;" id="userdetails">
                        <div  class="form-group" >
                            <label class="control-label col-sm-2">Name</label>
                            <input class="form-control" style="width: 200px" type="text" name="name" placeholder="Name" pattern="[A-Za-z\s]{3,}" required="">
                        </div>
                        <div  class="form-group">
                            <label class="control-label col-sm-2" >Phone number</label>
                            <input class="form-control" style="width: 200px" type="text" name="phone" placeholder="Phone number" pattern="[0-9]{11}" required="">
                        </div>
                        <div  class="form-group">
                            <label class="control-label col-sm-2" >Address</label>
                            {{-- pattern="[a-zA-Z0-9\s]+" --}}
                            <input class="form-control" style="width: 200px" type="text" name="address" pattern="{5,}" placeholder="Address" required="">
                        </div>
                        <div  class="form-group">
                            {{-- <input class="btn btn-info" type="submit" value="Submit"> --}}
                            <button type="submit"  style="background-color: blue; width:120px;height:45px;border-radius:8px; color:white" > Submit</button>
                            <button type="button" id="close" style="background-color: blue; width:120px;height:45px;border-radius:8px; color:white">Close</button>
                            {{-- /(010|011|012|015|)\d{8}/ --}}
                        </div>
                    </div>
                </div>

                </form>
            </div>
        @endif
      




        {{-- Function to make buttons appear/disappear when clicking order now --}}
        <script>
            //using jQuery
            $("#order").click(
                function() {
                    $("#userdetails").show();
                }

            );

            $("#close").click(
                function() {
                    $("#userdetails").hide();
                }

            );
        </script>

        {{-- Function to hide message that appears after you remove item to cart --}}

        <script>
            setTimeout(function() {
                $("#ItemRemoved").fadeOut().empty();
            }, 5000);
        </script>

        {{-- Function to hide message that appears after click confirm order --}}

        <script>
            setTimeout(function() {
                $("#ConfirmClicked").fadeOut().empty();
            }, 5000);
        </script>

        {{-- Function to hide message that appears after non-admin tries to access admin pages --}}

        <script>
            setTimeout(function() {
                $("#adminPages").fadeOut().empty();
            }, 5000);
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
                $("p").click(function() {
                    selectedClass = $(this).attr("data-rel");
                    $("#portfolio").fadeTo(50, 0.1);
                    $("#portfolio div").not("." + selectedClass).fadeOut();
                    setTimeout(function() {
                        $("." + selectedClass).fadeIn();
                        $("#portfolio").fadeTo(50, 1);
                    }, 500);

                });
            });
        </script>
    </body>

    </html>
