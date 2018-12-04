<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ URL::to('/') }}">
    <meta name="author" content="Majd Alhayek (Mike)">
    <meta name="description" content="@yield('description', 'laravel, php, framework, web, mike alhayek, web contractor, application developer, devloper, majd alhayek, laravel-code-generator, CRUD generator, Laravel CRUD')">
    <meta name="keywords" content="@yield('keywords', 'A web software consultant for PHP, Laravel, MySQL, SQL Server, C#, ASP.NET MVC, JavaScript')">
    <title>@yield('title')</title>

    <!-- Styles -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
          crossorigin="anonymous">


    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>

</head>

<body data-spy="scroll" data-target=".scrollspy">

    <nav class="navbar navbar-inverse navbar-fixed-top" id="master-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="/"><img src="images/crestapps-logo.png" title="CrestApps Logo" alt="CrestApps Logo" class="navbar-brand navbar-brand-logo"></a>

        </div>
        <div id="navbar" class="collapse navbar-collapse">

            @include('home.partials.headnav')

            @include('home.partials.login')

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container body-content">
        @yield('content')
    </div>


</body>
</html>
