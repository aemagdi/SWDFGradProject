<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.admincss')
      </head>
{{-- <h1>Customer Orders</h1> --}}

  <body>
    <div class="container-scroller" style="position: relative; top: 0px; right:-10px">
        @include('admin.navbar')

        <form action="{{url('/searchorders')}}" method="get">
            @csrf
            @if (isset($keyword))
            <input type="text" name="search" value="{{$keyword}}" style="color:blue;">
            @else
            <input type="text" name="search" placeholder="Search" style="color:blue;">
            @endif
            <input type="submit"  value="search" class="btn btn-success">

        </form>

        </div>




        <div class="container-scroller" style="position: relative; top: -500px; right:-400px">
            <table bgcolor="#e9967a" border="2px">


                <tr align="center">
                    <th style="padding: 30px">Customer's name</th>
                    <th style="padding: 30px">Phone</th>
                    <th style="padding: 30px">Address</th>
                    <th style="padding: 30px">Item's name</th>
                    <th style="padding: 30px">Price</th>
                    <th style="padding: 30px">Quantity</th>
                    <th style="padding: 30px">Total Price</th>

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
                    {{-- <td><a href="{{url('/editchef',$data->id)}}">Edit</a></td>
                    <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td> --}}
                </tr>
                @endforeach
            </table>


        </div>

    @include('admin.adminscript')
  </body>
</html>
