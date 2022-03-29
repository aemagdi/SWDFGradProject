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
        @include('admin.admincss')
      </head>

  <body>
    {{-- <div class="container-scroller" style="position: relative; top: 0px; right:-10px"> --}}
    @include('admin.navbar')

    <div class="container-scroller" style="position: relative; top: -600px; right:-400px">
        <table bgcolor="gray" border="2px">


            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">Email</th>
                <th style="padding: 30px">Phone number</th>
                <th style="padding: 30px">Number of guests</th>
                <th style="padding: 30px">Time</th>
                <th style="padding: 30px">Data</th>
                <th style="padding: 30px">Message left</th>
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
