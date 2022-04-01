

<div class="wrapper">
  <div class="sidebar" >
<!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
    <div class="logo"  >



        <a href="/" class="simple-text logo-normal">

            <img src ="/assets/images/white-logo.png" style="padding-top: 10px ; padding-left :30px;" >

        </a>
    </div>
    <style>
        body {
        /* overflow: hidden !important; */
    }
    </style>
{{-- sidebar --}}
    <div class="sidebar-wrapper" id="sidebar-wrapper">
      <ul class="nav">
        <li class="active ">
            <a href="{{url('/admindashboard')}}">


                  <i class="now-ui-icons design_app"  ></i>

                <p style="color:rgb(251, 88, 73);  font-famile:  " >Dashboard</p>


            </a>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/vieworders')}}">
            <span class="menu-icon">
              {{-- <i class="mdi mdi-contacts"></i> --}}

              <i class="now-ui-icons education_agenda-bookmark " style="color: rgb(251, 88, 73)"></i>
            </span>
            <span class="menu-title">Orders</span>
          </a>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/viewreservations')}}">
            <span class="menu-icon">
              <i class="now-ui-icons ui-1_bell-53" style="color: rgb(251, 88, 73)"></i>
            </span>
            <span class="menu-title">Reservations</span>
          </a>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/foodmenu')}}">
            <span class="menu-icon">
              <i class="now-ui-icons education_atom" style="color: rgb(251, 88, 73)"></i>
            </span>
            <span class="menu-title">Food items</span>
          </a>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/users')}}">
            <span class="menu-icon">
              <i class="now-ui-icons users_single-02"" style="color: rgb(251, 88, 73)"></i>
            </span>
            <span class="menu-title">Users</span>
          </a>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/viewchefs')}}">
            <span class="menu-icon">
              <i class="now-ui-icons users_single-02" style="color: rgb(251, 88, 73)"></i>
            </span>
            <span class="menu-title">Chefs</span>
          </a>
        </li>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('/addmember')}}">
            <span class="menu-icon">
              <i class="now-ui-icons gestures_tap-01" style="color: rgb(251, 88, 73)"></i>
            </span>
            <span class="menu-title">Add Admin User</span>
          </a>
        </li>



      </ul>
    </div>
  </div>
</div>
