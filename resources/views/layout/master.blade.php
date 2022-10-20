<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>@yield('title')</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>

        <!-- CSS-->
        <style>
            .jumbotron {
                padding: 2rem 1rem;
                margin-bottom: 1rem;
                margin-top: 1rem;
            }
        </style>
    </head>


<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary shadow-sm">
            <div class="container">
              <a class="navbar-brand" href="/welcome">Sistem Informasi Akademik Fasilkom</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link {{Request::is('dosen') ? 'active': ''}}"  href="/dosen" >Dosen</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{Request::is('mahasiswa') ? 'active': ''}}"   href="/mahasiswa">Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{Request::is('matkul') ? 'active': ''}}"   href="/matkul">Mata Kuliah</a>
                  </li>
                </ul>
              </div>

            </div>
          </nav>
          @yield('content')
    <!--Navbar-->

    <!--Footer-->
    <footer class="text-center text-dark mt-5">
        <p>Created by <a href="https://www.instagram.com/fzhraa21_/" class="fw-bold text-dark">Fathimatuz Zahra</a></p>
    </footer>
    <!--Footer-->

</body>

</html>

