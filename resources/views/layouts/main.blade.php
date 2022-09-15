<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style2.css">
    <title></title>
  </head>
  <body>
    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-lg">
        <div class="container">
          <a class="navbar-brand" href="/home">Computer Course</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto"></ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="/homePeserta">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/mengetik">Typing Test</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="/riwayat">Riwayat</a>
              </li>
              <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Nav -->

      <!-- content -->
      <div class="py-2">
      <div class="container">
        @yield('content')
    </div>
</div>

    <!-- Start Footer -->
 <footer class="bg-white shadow-lg ">
    <div class="w-100 py-1">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12 mt-1">
                    <p class="text-left text-dark">
                        Copyright &copy; 2022
                        | MI BUSTANUL MUBTADIIN KETAPANG
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
 <!-- End Footer -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     <!-- Scripts -->
     <script src="{{ asset('js/script.js') }}" defer></script>

  </body>
</html>
