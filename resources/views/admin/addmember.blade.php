<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	 crossorigin="anonymous">

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
	  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
	  crossorigin="anonymous"></script>


  @include('admin.admincss');
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
<div class="container-scroller" style="position: relative; top: -650px; right:-600px">
  <form action="/store" method="POST" >

<<<<<<< HEAD

      @csrf

   <div class="mb-3">
      <label for="disabledTextInput" class="form-label" >Name</label>

      <input style="color:black;" type="text" name="name"  required >
  </div>
  <div class="mb-3">
    <label  for="disabledTextInput" class="form-label">Email</label>
    <input style="color:black;" type="email" name="email" required>
</div>
  <div class="mb-3">
    <label  for="disabledTextInput" class="form-label">Password</label>
    <input style="color:black;" type="password" name="password" required>
</div>

<div style= "color:white">
    <input type="submit" class="btn btn-primary">
</div>
</form>

<<<<<<< HEAD
  </div>
</div>

  @include('admin.adminscript');
=======
  </div> --}}


  @include('admin.adminscript')

</body>

</html>

