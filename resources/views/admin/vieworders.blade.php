<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <title>Customer Orders</title>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
	 crossorigin="anonymous">

	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
	  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
	  crossorigin="anonymous"></script>


        @include('admin.admincss')
      </head>

      <body style=" overflow-x: hidden;">

{{-- <h1>Customer Orders</h1> --}}


  <body>
    <div class="container-scroller" style="position: relative; top: -600px; right:-400px; left:500px">
        @include('admin.navbar')

        <form action="{{url('/searchorders')}}" method="get">
            @csrf
            @if (isset($keyword))
            <input type="text" name="search" value="{{$keyword}}" style="color:blue;">
            @else
            <input type="text" name="search" placeholder="Search" style="color:blue;">
            @endif
            <input type="submit"  value="search" class="btn btn-primary">

        </form>

        </div>




        <div class="container-scroller" style="position: relative; top: -580px; right:-400px ;left:-400;">

            <table class="table table-Warning table-striped" style="width: 150px">


                <tr align="center">
                    <th style="padding: 10px">Customer's name</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Address</th>
                    <th style="padding: 10px">Item's name</th>
                    <th style="padding: 10px">Price</th>
                    <th style="padding: 10px">Quantity</th>
                    <th style="padding: 10px">Total Price</th>
                    <th style="padding: 10px">Action</th>
                </tr>
                 @foreach ($data as $data)
                <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->foodname}}</td>
                    <td>${{$data->price}}</td>
                    <td>{{$data->quantity}}</td>
                    <td>${{$data->price*$data->quantity}}</td>
                    {{-- <td><img height="150" width="150" src="/chefimages/{{$data->image}}" alt="Not found"></td> --}}
                     {{-- <td><a href="{{url('/editchef',$data->id)}}">Edit</a></td> --}}
                     <td><a href="{{url('/deleteorder',$data->id)}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>


        </div>

    @include('admin.adminscript')
  </body>
</html>
