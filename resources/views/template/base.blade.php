<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>

    <ul>
      @yield('bevande')
    </ul>

    <div class="prezzi">
      @yield('prezzi')
    </div>

  </body>
</html>
