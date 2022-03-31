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
  <div class="container-scroller">

  @include('admin.navbar');

  <div>
  </div>
<div class="container-scroller" style="position: relative; top: -650px; right:-600px">
  <form action="/store" method="POST" >


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

  </div>
</div>

  @include('admin.adminscript');

</body>

</html>

