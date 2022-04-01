<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        @include('admin.admincss')

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
         crossorigin="anonymous"></script>


      </head>

  <body>
    {{-- <div class="container-scroller" style="position: relative; top: 0px; right:-10px"> --}}
    @include('admin.navbar')

    <div class="container-scroller" style="position: relative; top: -600px; right:-500px;width:400px; border:3px solid #e9967a ; border-radius:12px">

        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data" style="padding:20px">
            @csrf
            <div class="mb-3">
                <label label  for="disabledTextInput" class="form-label">Title</label>
                <input type="text" style="color:blue" name="title" placeholder="Write a title" value="{{$data->title}}" required>
            </div>
            <div class="mb-3">
                <label label  for="disabledTextInput" class="form-label">Price</label>
                <input type="number" style="color:blue" name="price" placeholder="price" value="{{$data->price}}" required>
            </div>

            <div class="mb-3">
                <label label  for="disabledTextInput" class="form-label">Description</label>
                <input type="text" style="color:blue" name="description" value="{{$data->description}}" placeholder="Write a description" required>
            </div>
            <div class="mb-3">
                <label label  for="disabledTextInput" class="form-label">Old Image </label>
                <img height="100" width="100" src="/foodimages/{{$data->image}}" alt="Not found">
            </div>
            <div class="mb-3">
                <label label  for="disabledTextInput" class="form-label">New Image</label>
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
