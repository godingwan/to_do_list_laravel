<!doctype html>
<html lang="en">
  <head>
    <title>To Do List</title>
    {{ HTML::style('css/bootstrap.css') }}
  </head>
  <body>

    <div class="text-center">
      <div class="container">
        @if (Session::has('message'))
          <div class='alert'>
            <p>{{ Session::get('message', array('class' => '')) }}</p>
          </div>
        @endif

        @yield('content')
      </div>
    </div>

  </body>
</html>
