<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Webstock</title>
  </head>
  <body>
  @if (Auth::check())
    @include("header")
  @endif
    <div class="content">
      <div class="container">
        @include('flash')
        @yield("content")
      </div>
    </div>
  </body>
</html>
