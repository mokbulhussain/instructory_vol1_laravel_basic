<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    @include('include.style')

  </head>
  <body>
    
    @include('include.navbar')
    
    <div class="content">
      @if(session('status'))
      <div class="bg-danger">
        {{session('status')}}
      </div>
    @endif
      @yield('content')
    </div>

    @include('include.script')
  </body>
</html>