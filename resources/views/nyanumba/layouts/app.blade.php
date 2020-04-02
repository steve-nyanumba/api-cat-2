<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ secure_asset('css/app.css') }} ">
    <script src=" {{ secure_asset('js/app.js') }} "></script>
    <title>API CAT 2</title>
</head>
<body>
    <div id="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">Nyanumba</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/feepayments">View Fees Table<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </div>
          </nav>

          <main class="py-5">
              @include('nyanumba.layouts.notify')
              @yield('content')
          </main>
    </div>
</body>
</html>
