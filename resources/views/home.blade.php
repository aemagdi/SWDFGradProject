<!DOCTYPE html>

<html lang="en">

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">



    <title>The Parisian</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

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
                        <a class="menu-trigger">
                            <span>Menu</span>
                        </a>
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
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section" style="padding-top: 9px; font-weight:600">
                                @auth <a href="{{ url('/showcart', Auth::id()) }}">
                                    <i class="fa" style="font-size:30px" >&#xf07a;</i>
                                   <span class='badge badge-warning' id='lblCartCount'>{{ $count }} </span>
                                     </a>
                                    @endauth @guest
                                    <i class="fa" style="font-size:30px" >&#xf07a;</i>
                                   <span class='badge badge-warning' id='lblCartCount'>0</span>
                                    @endguest</li>


                                @if (Auth::user())
                                @if (Auth::user()->usertype == '1')
                                <li class="scroll-to-section">
                                 <a href="/admindashboard">Admin Dashboard</a>
                                 </li>
                                @endif

                                @else
                                <li class="scroll-to-section" hidden>
                                    <a href="/admindashboard">Admin Dashboard</a>
                                    </li>
                                @endif


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

                {{--  Div to alert user after adding items to tha cart--}}
                   <div id="ItemAdded">
                       @if(session()->get('message'))
                    <div  class="alert alert-success">
                         <button   type="button" class="close"  data-dismiss="alert">

                         </button>
                           {{(session()->get('message'))}}

                    </div>


                    @else

                    @endif
                   </div>


            {{--  Div to alert user after sending reservation--}}
            <div id="ReservationAdded">
                @if(session()->get('message2'))
            <div  class="alert alert-success">
                <button   type="button" class="close"  data-dismiss="alert">

                </button>
                    {{(session()->get('message2'))}}

            </div>


            @else

            @endif
            </div>

            {{--  Div to alert user after trying to access admin pages--}}
            <div id="adminPages">
                @if(session()->get('notAdminError'))
             <div  class="alert alert-success">
                  <button   type="button" class="close"  data-dismiss="alert">

                  </button>
                    {{(session()->get('notAdminError'))}}

             </div>


             @else

             @endif
            </div>



                    </nav>
                </div>
            </div>
            </div>
        </header>
        <!-- ***** Header Area End ***** -->

        <!-- ***** Main Banner Area Start ***** -->
        <div id="top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="left-content">
                            <div class="inner-content">
                                <h4>The Parisian Cafe</h4>
                                <h6>THE BEST EXPERIENCE</h6>
                                <div class="main-white-button scroll-to-section">
                                    <a href="#reservation">Make A Reservation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="main-banner header-text">
                            <div class="Modern-Slider">
                                <!-- Item -->
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="assets/images/slide-01.jpg" alt="">
                                    </div>
                                </div>
                                <!-- // Item -->
                                <!-- Item -->
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="assets/images/slide-02.jpg" alt="">
                                    </div>
                                </div>
                                <!-- // Item -->
                                <!-- Item -->
                                <div class="item">
                                    <div class="img-fill">
                                        <img src="assets/images/slide-03.jpg" alt="">
                                    </div>
                                </div>
                                <!-- // Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Main Banner Area End ***** -->

        <!-- ***** About Area Starts ***** -->
        <section class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="left-text-content">
                            <div class="section-heading">
                                <h6>About Us</h6>
                                <h2>We Leave A Delicious Memory For You</h2>
                            </div>
                            <p>The Parisian is a French style brasserie as founded by Tarzi Cenador a native of Paris, in an effort to recreate the ambience and food of his homeland. An upbeat, lively atmosphere flavored by unique French music immediately puts you in a Parisian frame of mind.

                                Our menu combines French Classics with a modern twist accompanied by unique selections of  vegetables and sauces, as well as exclusive French, Washington State and California wine selections.

                                We offer a full bar with exclusive craft cocktails plus a selection of 30 wines by the glass and a reserve list of high end wines.</p>
                            <div class="row">
                                <div class="col-4">
                                    <img src="assets/images/about-thumb-01.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="assets/images/about-thumb-02.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img src="assets/images/about-thumb-03.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="right-content">
                            <div class="thumb">
                                <a rel="nofollow" href="https://www.youtube.com/watch?v=X2jakwIVLbY"><i class="fa fa-play"></i></a>
                                <img src="assets/images/about-video-bg.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** About Area Ends ***** -->

        <!-- ***** Menu Area Starts ***** -->
        @include('food')
        <!-- ***** Menu Area Ends ***** -->

        <!-- ***** Chefs Area Starts ***** -->
        @include('chefs')
        <!-- ***** Chefs Area Ends ***** -->

        <!-- ***** Reservation Us Area Starts ***** -->
         @include('reservations')
        <!-- ***** Reservation Area Ends ***** -->

        <!-- ***** Menu Area Starts ***** -->
        <section class="section" id="offers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 text-center">
                        <div class="section-heading">
                            <h6>The Parisian Week</h6>
                            <h2>This Week’s Special Meal Offers</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row" id="tabs">
                            <div class="col-lg-12">
                                <div class="heading-tabs">
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3">
                                            <ul>
                                                <li><a href='#tabs-1'><img src="assets/images/tab-icon-01.png"
                                                            alt="">Breakfast</a></li>
                                                <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png"
                                                            alt="">Lunch</a></a></li>
                                                <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png"
                                                            alt="">Dinner</a></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <section class='tabs-content'>
                                    <article id='tabs-1'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="left-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-01.png" alt="">
                                                                <h4>Fresh Chicken Salad</h4>
                                                                <p>chicken is a main ingredient. Other ingredients include mayonnaise,
                                                                    hard-boiled egg, celery, onion, pepper, pickles and a variety of mustards.</p>
                                                                <div class="price">
                                                                    <h6>$10.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-02.png" alt="">
                                                                <h4>Orange Juice</h4>
                                                                <p>it comes in several different varieties, including blood orange,
                                                                    navel oranges, valencia orange, clementine, and tangerine.</p>
                                                                <div class="price">
                                                                    <h6>$8.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-03.png" alt="">
                                                                <h4>Fruit Salad</h4>
                                                                <p>consisting of various kinds of fruit, sometimes served in a liquid, either their own juices or a syrup. In different forms,
                                                                    fruit salad can be served as an appetizer, a side salad, or a dessert.</p>
                                                                <div class="price">
                                                                    <h6>$9.90</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="right-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-04.png" alt="">
                                                                <h4>Eggs Omelette</h4>
                                                                <p>made from beaten eggs, fried with butter or oil in a frying pan.
                                                                    It is quite common for the omelette to be folded around fillings such as chives, vegetables, and mushrooms.</p>
                                                                <div class="price">
                                                                    <h6>$6.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-05.png" alt="">
                                                                <h4>Lentil Soup</h4>
                                                                <p>based on lentils; it may be vegetarian or include meat, and may use brown,
                                                                    red, yellow, green or black lentils, with or without the husk.</p>
                                                                <div class="price">
                                                                    <h6>$5.00</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-06.png" alt="">
                                                                <h4>Omelette & Cheese</h4>
                                                                <p>cheddars, mozzarella, and alpine cheeses like Gruyère all melt perfectly for an omelet,
                                                                    but other cheeses like feta, parmesan, or manchego can be added too.</p>
                                                                <div class="price">
                                                                    <h6>$4.10</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article id='tabs-2'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="left-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-04.png" alt="">
                                                                <h4>Eggs Omelette</h4>
                                                                <p>made from beaten eggs, fried with butter or oil in a frying pan.
                                                                    It is quite common for the omelette to be folded around fillings such as chives, vegetables, and mushrooms.</p>
                                                                <div class="price">
                                                                    <h6>$14</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-05.png" alt="">
                                                                <h4>Lentil Soup</h4>
                                                                <p>based on lentils; it may be vegetarian or include meat, and may use brown,
                                                                     red, yellow, green or black lentils, with or without the husk.</p>
                                                                <div class="price">
                                                                    <h6>$18</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-06.png" alt="">
                                                                <h4>Omelette & Cheese</h4>
                                                                <p>cheddars, mozzarella, and alpine cheeses like Gruyère all melt perfectly for an omelet,
                                                                    but other cheeses like feta, parmesan, or manchego can be added too.</p>
                                                                <div class="price">
                                                                    <h6>$22</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="right-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-01.png" alt="">
                                                                <h4>Fresh Chicken Salad</h4>
                                                                <p>chicken is a main ingredient. Other ingredients include mayonnaise,
                                                                     hard-boiled egg, celery, onion, pepper, pickles and a variety of mustards.</p>
                                                                <div class="price">
                                                                    <h6>$10</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-02.png" alt="">
                                                                <h4>Orange Juice</h4>
                                                                <p> it comes in several different varieties, including blood orange,
                                                                     navel oranges, valencia orange, clementine, and tangerine.</p>
                                                                <div class="price">
                                                                    <h6>$20</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-03.png" alt="">
                                                                <h4>Fruit Salad</h4>
                                                                <p>consisting of various kinds of fruit, sometimes served in a liquid, either their own juices or a syrup. In different forms,
                                                                     fruit salad can be served as an appetizer, a side salad, or a dessert.</p>
                                                                <div class="price">
                                                                    <h6>$30</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article id='tabs-3'>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="left-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-05.png" alt="">
                                                                <h4>Eggs Omelette</h4>
                                                                <p>made from beaten eggs, fried with butter or oil in a frying pan.
                                                                    It is quite common for the omelette to be folded around fillings such as chives, vegetables, and mushrooms.</p>
                                                                <div class="price">
                                                                    <h6>$14</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-03.png" alt="">
                                                                <h4>Orange Juice</h4>
                                                                <p>it comes in several different varieties, including blood orange,
                                                                    navel oranges, valencia orange, clementine, and tangerine.</p>
                                                                <div class="price">
                                                                    <h6>$18</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-02.png" alt="">
                                                                <h4>Fruit Salad</h4>
                                                                <p>consisting of various kinds of fruit, sometimes served in a liquid, either their own juices or a syrup. In different forms,
                                                                    fruit salad can be served as an appetizer, a side salad, or a dessert.</p>
                                                                <div class="price">
                                                                    <h6>$10</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="right-list">
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-06.png" alt="">
                                                                <h4>Fresh Chicken Salad</h4>
                                                                <p>chicken is a main ingredient. Other ingredients include mayonnaise,
                                                                    hard-boiled egg, celery, onion, pepper, pickles and a variety of mustards.</p>
                                                                <div class="price">
                                                                    <h6>$8.50</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-01.png" alt="">
                                                                <h4>Lentil Soup</h4>
                                                                <p>based on lentils; it may be vegetarian or include meat, and may use brown,
                                                                    red, yellow, green or black lentils, with or without the husk.</p>
                                                                <div class="price">
                                                                    <h6>$9</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="tab-item">
                                                                <img src="assets/images/tab-item-04.png" alt="">
                                                                <h4>Omelette & Cheese</h4>
                                                                <p>made from beaten eggs, fried with butter or oil in a frying pan.
                                                                    It is quite common for the omelette to be folded around fillings such as chives, vegetables, and mushrooms..</p>
                                                                <div class="price">
                                                                    <h6>$11</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Chefs Area Ends ***** -->

        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-xs-12">
                        <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="/"><img src="assets/images/white-logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-12">
                        <div class="left-text-content">
                            <p>© Copyright The Parisian Cafe Co.

                                <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        {{-- Function to hide message that appears after you add item to cart --}}

       <script>
         setTimeout(function() {
            $("#ItemAdded").fadeOut().empty();
          }, 5000);
       </script>

{{-- Function to hide message that appears after you add reservation --}}

<script>
    setTimeout(function() {
       $("#ReservationAdded").fadeOut().empty();
     }, 7000);
  </script>

{{-- Function to hide message that appears after non-admin tries to access admin pages--}}

<script>
    setTimeout(function() {
       $("#adminPages").fadeOut().empty();
     }, 7000);
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
