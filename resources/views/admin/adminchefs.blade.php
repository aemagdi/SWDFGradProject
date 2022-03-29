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
    </div>
    <div class="container-scroller" style="position: relative; top: -550px; right:-600px">
        <form action="{{url('/addchefs')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef's Name</label>
                <input type="text" style="color:blue" name="name" placeholder="Enter chef's name" required>
            </div>
            <div>
                <label>Chef's Picture</label>
                <input type="file" style="color:blue" name="image" required>
            </div>
            <div>
                <label>Chef's Description</label>
                <input type="text" style="color:blue" name="description" placeholder="Enter chef's description" required>
            </div>
            <div style= "color:white">
                <input type="submit" value="Save">
            </div>
        </form>
    </div>
    <div class="container-scroller" style="position: relative; top: -500px; right:-400px">
        <table bgcolor="black" border="2px">


            <tr>
                <th style="padding: 30px">Chef's name</th>
                <th style="padding: 30px">Chef's description</th>
                <th style="padding: 30px">Image</th>
                <th style="padding: 30px">Action</th>
                <th style="padding: 30px">Action</th>

            </tr>
             @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->description}}</td>
                <td><img height="150" width="150" src="/chefimages/{{$data->image}}" alt="Not found"></td>
                <td><a href="{{url('/editchef',$data->id)}}">Edit</a></td>
                <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>


    </div>
    @include('admin.adminscript')
  </body>
</html>
