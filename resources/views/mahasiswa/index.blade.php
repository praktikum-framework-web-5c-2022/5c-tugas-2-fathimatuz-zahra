@extends('layout.master')
@section('title', 'Mahasiswa')
@section('content')

    <!--Jumbotron-->
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Selamat Datang di Halaman Mahasiswa</h1>
          <p class="lead">Berikut nama-nama mahasiswa/i Fasilkom Unsika Kelas B Angkatan 2020</p>
        </div>
      </section>
    <!--Jumbotron-->

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-sm">
                <thead class="table-light">
                  <tr>
                      <th scope="col-8">NPM</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Photo</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->npm }}</td>
                        <td>{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->tempat_lahir }}</td>
                        <td>{{ $mahasiswa->tanggal_lahir }}</td>
                        <td>{{ $mahasiswa->photo }}</td>
                    </tr>
                  @endforeach

                </tbody>
              </table>

        </div>
    </div>

    </div>

    <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"
        ></script>
</body>
</html>

@endsection
