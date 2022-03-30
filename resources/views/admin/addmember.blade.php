<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  
  @include('admin.admincss');
</head>
<body>
  <div class="container-scroller">

  @include('admin.navbar');

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

  </div>


  @include('admin.adminscript');
  
</body>

</html>

