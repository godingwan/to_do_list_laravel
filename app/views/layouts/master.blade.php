<!doctype html>
<html lang="en">
  <head>
    <title>To Do List</title>
  </head>
  <body>

    <div class="container">
      @if (Session::has('message'))
        <div>
          <p>{{ Session::get('message') }}</p>
        </div>
      @endif

      @yield('content')
    </div>

  </body>
</html>
