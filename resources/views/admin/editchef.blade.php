<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        @include('admin.admincss')
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
         crossorigin="anonymous"></script>

      </head>

  <body>
    @include('admin.navbar')

    <div  class="container-scroller" style="position: relative; top: -600px; right:-500px;width:400px; border:3px solid #e9967a ; border-radius:12px">

        <form action="{{url('/updatechef',$data->id)}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="mb-3">
                <label  for="disabledTextInput" class="form-label">Chef's Name</label>
                <input type="text" style="color:blue" name="name" placeholder="Enter chef's name" value="{{$data->name}}" required>
            </div>
            <div class="mb-3">
                <label  for="disabledTextInput" class="form-label">Chef's Description</label>
                <input type="text" style="color:blue" name="description" placeholder="Enter chef's description" value="{{$data->description}}" required>
            </div>
            <div class="mb-3">
                <label  for="disabledTextInput" class="form-label">Old Picture</label>
                <img height="150" width="150" src="/chefimages/{{$data->image}}" alt="Picture not found"></div>
            <div class="mb-3">
                <label  for="disabledTextInput" class="form-label">New Picture</label>
                <input  class="form-control" type="file" style="color:blue ; width:300px" name="image" >
            </div>

            <div style= "color:white">
                <input class="btn btn-primary" type="submit" value="Update">
            </div>
        </form>
    </div>


    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>
