@extends('layout.master')
@section('title', 'Dosen')
@section('content')

    <!--Jumbotron-->

    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Selamat Datang di Halaman Dosen</h1>
          <p class="lead">Berikut beberapa nama dosen Fasilkom Unsika</p>
        </div>
      </section>
    <!--Jumbotron-->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <table class="table table-sm">
                    <thead class="table-light">
                      <tr>
                          <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Photo</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($data as $dosen)
                      <tr>
                        <td>{{ $dosen->nidn }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->jenis_kelamin }}</td>
                        <td>{{ $dosen->alamat }}</td>
                        <td>{{ $dosen->tempat_lahir }}</td>
                        <td>{{ $dosen->tanggal_lahir }}</td>
                        <td>{{ $dosen->photo }}</td>

                      </tr>
                    @endforeach
                    </tbody>
                  </table>
            </div>
        </div>

    </div>

@endsection
