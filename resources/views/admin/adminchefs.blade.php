<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.admincss')


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
         crossorigin="anonymous"></script>

      </head>

  <body>
    <div class="container-scroller" style="position: relative; top: 0px; right:-10px">
    @include('admin.navbar')
    </div>
    <div class="container-scroller" style="position: relative; top: -650px; right:-600px">

        <form action="{{url('/addchefs')}}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Chef's Name</label>
                <input type="text" style="color:blue" name="name" placeholder="Enter chef's name" required>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Chef's Picture</label>
                <input type="file" style="color:blue" name="image" required>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Chef's Description</label>
                <input type="text" style="color:blue" name="description" placeholder="Enter chef's description" required>
            </div>
            <div style= "color:white" >
                <input class="btn btn-primary"  type="submit" value="Save" >
            </div>
        </form>
    </div>


    <div class="container-scroller" style="position: relative; top: -580px; right:-400px ;left:-400;">
        <table class="table table-Warning table-striped" style="width: 150px">


            <tr align="center">
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
