<!doctype html>
<html   dir="rtl" lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


</head>

<body>
    <div id="app">
<!--Navbar-->
<nav  dir="rtl" style="text-align: right" class="navbar navbar-dark default-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="/home">لوحة التحكم</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul  dir="rtl" style="text-align: right"class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home">الرئيسية
            
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categoreis">الاقسام</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/places">الاماكن</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/suggests">النصائح</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/users">المستخدمين</a>
          </li>

          <li class="nav-item">

            <form id="logout-form" action="{{ route('logout') }}" method="POST">

                @csrf

                <button class="btn btn-danger" name="submit" type="submit"> تسجيل خروج</button>
            </form>
            {{-- <i class="far fa-circle nav-icon"></i>
            --}}

            </a>
        </li>
  
       
  
      </ul>
      <!-- Links -->
 
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- JQuery -->
<script src="https://www.google.com/recaptcha/api.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>
</html>
