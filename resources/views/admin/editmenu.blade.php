<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/public">
        @include('admin.admincss')

      </head>

  <body>
    <div class="container-scroller" style="position: relative; top: 0px; right:-10px">
    @include('admin.navbar')
    <div class="container-scroller" style="position: relative; top: 110px; right:-250px">
        <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" style="color:blue" name="title" placeholder="Write a title" value="{{$data->title}}" required>
            </div>
            <div>
                <label>Price</label>
                <input type="number" style="color:blue" name="price" placeholder="price" value="${{$data->price}}" required>
            </div>

            <div>
                <label>Description</label>
                <input type="text" style="color:blue" name="description" value="{{$data->description}}" placeholder="Write a description" required>
            </div>
            <div>
                <label>Old Image </label>
                <img height="100" width="100" src="/foodimages/{{$data->image}}" alt="Not found">
            </div>
            <div>
                <label>New Image</label>
                <input type="file" name="image">
            </div>
            <div style= "color:white">
                <input type="submit" value="Update">
            </div>
        </form>
    </div>
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>
