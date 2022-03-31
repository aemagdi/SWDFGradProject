<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>

  @include('admin.admincss')
</head>
<body>

    <div class="container-scroller" style="position: relative; top: 0px; right:-10px">
        @include('admin.navbar')
        <div class="container-scroller" style="position: relative; top: 110px; right:-250px">
            <form action="/store" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Name</label>
                    <input type="text" style="color:blue" name="name" placeholder="Enter user's name" required>
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" style="color:blue" name="email" placeholder="Enter user's email" required>
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" style="color:blue" name="password" placeholder="Enter user's password"  required>
                </div>


                <div style= "color:white">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
  {{-- <div class="container-scroller">

  @include('admin.navbar')

  <div>
  </div>

  <form action="/store" method="POST">


      @csrf

   <div>
      <label for="" >Name</label>
      <input style="color:black;" type="text" name="name"  required >
  </div>
  <div>
    <label for="">Email</label>
    <input style="color:black;" type="email" name="email" required>
</div>
  <div>
    <label for="">Password</label>
    <input style="color:black;" type="password" name="password" required>
</div>

<div>
    <input type="submit">
</div>
</form>

  </div> --}}


  @include('admin.adminscript')

</body>

</html>

