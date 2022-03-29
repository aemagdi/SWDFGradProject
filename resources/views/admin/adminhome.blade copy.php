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
    <!-- container-scroller -->
    @include('admin.adminscript')
  </body>
</html>
