<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
  </head>
  <body>
    <div id="root" class="container">
      @include('partials.nav')
      @include('partials.messages')
      <div class="columns is-mobile is-multiline">
        <div class="column is-12-mobile is-4-tablet is-4-desktop is-3-widescreen is-2-fullhd">
          @include('partials.sidebar')
        </div>
        <div class="column is-12-mobile is-8-tablet is-8-desktop is-9-widescreen is-10-fullhd">
          @yield('content')
        </div>
      </div>
      @include('partials.script')
    </div>

  </body>
</html>
