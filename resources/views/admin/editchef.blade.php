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
        <form action="{{url('/updatechef',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef's Name</label>
                <input type="text" style="color:blue" name="name" placeholder="Enter chef's name" value="{{$data->name}}" required>
            </div>
            <div>
                <label>Chef's Description</label>
                <input type="text" style="color:blue" name="description" placeholder="Enter chef's description" value="{{$data->description}}" required>
            </div>
            <div>
                <label>Old Picture</label>
                <img height="150" width="150" src="/chefimages/{{$data->image}}" alt="Picture not found">            </div>
            <div>
                <label>New Picture</label>
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
