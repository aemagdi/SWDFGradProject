<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.admincss')

      </head>

  <body>
    @include('admin.navbar')
    <div class="container-scroller" style="position: relative; top: -550px; right:-600px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" style="color:blue" name="title" placeholder="Write a title" required>
        </div>
        <div>
            <label>Price</label>
            <input type="number" style="color:blue" name="price" placeholder="price" required>
        </div>
        <div>
            <label>Image</label>
            <input type="file" style="color:blue" name="image" required>
        </div>
        <div>
            <label>Description</label>
            <input type="text" style="color:blue" name="description" placeholder="Write a description" required>
        </div>
        <div style= "color:white">
            <input type="submit" value="Save">
        </div>
    </form>

    </div>
    <div class="container-scroller" style="position: relative; top: -500px; right:-400px">
        <table bgcolor="black" border="2px">


            <tr>
                <th style="padding: 30px">Item name</th>
                <th style="padding: 30px">Item Price</th>
                <th style="padding: 30px">Item description</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action</th>

            </tr>
             @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>${{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img height="150" width="150" src="/foodimages/{{$data->image}}" alt="Not found"></td>
                <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                <td><a href="{{url('/editmenu',$data->id)}}">Edit</a></td>
            </tr>
            @endforeach
        </table>


    </div>
    @include('admin.adminscript')
  </body>
</html>
