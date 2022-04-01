{{-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head> --}}
<body>
    <x-app-layout>

    </x-app-layout>

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
          <style>
            body {
            overflow: hidden !important;
        }
        </style>

      <body>
        {{-- <div class="container-scroller"> --}}
        @include('admin.navbar')

            <div class="container-scroller" style="position: relative; top: -600px; right:-600px" >

               <table class="table table-striped" style="width: 150px" >

                <tr align="center">
                    <th style="padding: 10px">Name</th>
                   <th style="padding: 10px">Email</th>
                   <th style="padding: 10px">Action</th>
                </tr>
                @foreach ($data as $data)
                    <tr align="center">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if ($data->usertype=="0")
                    <td><a href="{{url('deleteuser', $data->id)}}"> Delete</a></td>
                    @else
                    <td> Not Allowed</td>
                    @endif
                    </tr>
                                @endforeach
               </table>
            </div>




        @include('admin.adminscript')

      </body>
    </html>


