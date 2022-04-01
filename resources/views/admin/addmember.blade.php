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

    @include('admin.navbar')

    <div class="container-scroller" style="position: relative; top: -600px; right:-480px; width:400px; border:3px solid #e9967a ; border-radius:12px; align-items:center; display:flex">

        {{-- <div class="container-scroller" style="position: relative; top: 110px; right:-250px"> --}}

            <form action="/store" method="post" enctype="multipart/form-data" style="padding:10px ; margin :0 auto; width:210px">
                @csrf
                <div class="mb-3">

                    <label  for="disabledTextInput" class="form-label" style="align-self: flex-start" >Name</label>
                    <input type="text" style="color:blue;  " name="name" placeholder="Enter user's name" required>
                </div>

                <div class="mb-3">
                    <label  for="disabledTextInput" class="form-label" style="align-self: flex-start">Email</label>
                    <input type="email" style="color:blue;  " name="email" placeholder="Enter user's email" required>
                </div>

                <div class="mb-3">
                    <label  for="disabledTextInput" class="form-label" style="align-self: flex-start">Password</label>
                    <input type="password" style="color:blue;  " name="password" placeholder="Set user's password"  required>
                </div>


                <div style= "color:white">
                 <input class="btn btn-primary" type="submit" value="Save">
                </div>
            </form>
        </div>

 @include('admin.adminscript')

</body>

</html>

