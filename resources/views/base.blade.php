
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('titulo') - Plax</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/devicons/css/devicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/resume.min.css')}}" rel="stylesheet">

  </head>


    <body>
              <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
          <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Buffete</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

              @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
          </div>
          <button type="button" class="btn btn-warning">
    <a href="{{ route('logout') }}"            onclick="event.preventDefault();                     document.getElementById('logout-form').submit();">
        Logout
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</button>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='{{url("/")}}'>Casos libres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='{{url("caso/nuevo")}}'>Nuevo Caso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='{{url("casos/finalizados")}}'>Casos Terminados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='{{url("cliente/nuevo")}}'>Nuevo Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='{{url("abogado/nuevo")}}'>Nuevo Abogado</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href='{{url("clientes")}}'>Clientes</a>
              </li>

            </ul>
          </div>
        </nav>
        <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
          <div class="my-auto">
          @yield('content')

          </div>
                        @endif

        </section>

        <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Plugin JavaScript -->
        <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for this template -->
        <script src="{{ asset('js/resume.min.js')}}"></script>
    </body>
</html>
