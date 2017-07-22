<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{config('app.name', 'WikiPrice')}} </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}"
    </head>
    <body>
       @include('includes.navbar')
       <div id="container">
            <div id="content">
               @yield('content')
            </div>
            <div id="footer">
                @include('includes.footer')
            </div>
      </div>
    </body>
</html>