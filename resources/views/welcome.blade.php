<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
      <a href="{{ route('welcome') }}">Home</a>
      <a href="{{ route('users.index') }}">Get users</a>
      <a href="{{ route('users.create') }}">Add user</a>

      @yield('content')
    </body>
</html>
