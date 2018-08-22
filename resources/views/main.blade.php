<!doctype html>
<html lang="en">
  <head>
    @include('templates._head')
  </head>

  <body>

    @include('templates._nav')

    <main role="main">
    @yield('content')
    </main>

    @include('templates._footer')


    @include('templates._javascript')
    @yield('scripts')

  </body>
</html>
