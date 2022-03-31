<x-app-layout>

</x-app-layout>
{{-- $data->name =$request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;
        $data->guest= $request->guest;
        $data->time= $request->time;
        $data->date= $request->date;
        $data->message= $request->message; --}}
<!DOCTYPE html>
<html lang="en">
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
         crossorigin="anonymous"></script>



        @include('admin.admincss')
      </head>

  <body>
    {{-- <div class="container-scroller" style="position: relative; top: 0px; right:-10px"> --}}
    @include('admin.navbar')

    <div class="container-scroller" style="position: relative; top: -580px; right:-400px ;left:-400;">
        <table class="table table-Warning table-striped" style="width: 150px">


            <tr>
                <th style="padding: 10px">Name</th>
                <th style="padding: 10px">Email</th>
                <th style="padding: 10px">Phone number</th>
                <th style="padding: 10px">Number of guests</th>
                <th style="padding: 10px">Time</th>
                <th style="padding: 10px">Data</th>
                <th style="padding: 10px">Message left</th>
            </tr>
             @foreach ($data as $data)
            <tr align="center">
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->guest}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->message}}</td>
                {{-- <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                <td><a href="{{url('/editmenu',$data->id)}}">Edit</a></td> --}}
            </tr>
            @endforeach
        </table>


    </div>

    {{-- </div> --}}
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>
