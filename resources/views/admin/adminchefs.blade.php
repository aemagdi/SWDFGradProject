<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	 crossorigin="anonymous">

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
	  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
	  crossorigin="anonymous"></script>


        @include('admin.admincss')

</head>
<body style=" overflow-x: hidden;">
    @include('admin.navbar')

    <div class="container-scroller" style="position: relative; top: -600px; right:-480px; width:400px; border:3px solid #e9967a ; border-radius:12px" >
        <form action="{{url('/addchefs')}}" method="post" enctype="multipart/form-data" style="padding:10px ; margin :0 auto; width:300px">
            @csrf
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"  style="align-self: flex-start">Chef's Name</label>
                <input type="text" style="color:blue" name="name" placeholder="Enter chef's name" required>
            </div>
            <div class="mb-3" >
                <label for="disabledTextInput" class="form-label"  style="padding-right: 10px ; align-self: flex-start">Chef's Picture</label>
                <input  class="form-control" type="file" style="color:blue ; width:225px" name="image" required>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label"  style="align-self: flex-start">Chef's Description</label>
                <input type="text" style="color:blue" name="description" placeholder="Enter chef's description" required>
            </div>
            <div style= "color:white">
                <input class="btn btn-primary" type="submit" value="Save">
            </div>
        </form>
    </div>
    <div class="container-scroller" style="position: relative; top: -550px; right:-400px">
        <table class="table table-Warning table-striped" style="width: 150px">


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
