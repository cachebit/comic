<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- include summernote css/js-->
    <link href="dist/summernote.css" rel="stylesheet">
    <script src="dist/summernote.js"></script>
    @include('UEditor::head');
  </head>
  <body>
    <div class="container">
      @include('partials.header')
      @include('partials.nav')
      @yield('content')


      @yield('partials.footer')
      @yield('partials.script')
    </div>

  </body>
</html>
