<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 bg-primary py-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-2 vh-100 border">
                <div class="nav flex-column nav-pills nt-14" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" href="/home">Home</a>
                    <a class="nav-link"href="/dosen" >Dosen</a>
                    <a class="nav-link"href="/mahasiswa" >Mahasiswa</a>
                    <a class="nav-link" href="/Skripsi" >Skripsi</a>
                  </div>
            </div>
            <div class="col-lg-10 vh-100">
                <div class="card mt-4">
                    <div class="card-header">
                       <a href="/mahasiswa/tambahData" id="" class="btn btn-primary" href="#" role="button"><i class="bi bi-plus-square-fill"></i>Tambahkan Data</a>
                        <form class="form-inline my-2-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                        <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama </th>
                                <th scope="col">Gender</th>
                                <th scope="col">Jurusan </th>
                                <th scope="col">Bidang Minat</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $no => $m)
                                <tr>
                                    <th scope="row">{{++$no}}</th>
                                    <td>{{$m -> nim}}</td>
                                    <td>{{$m -> nama}}</td>
                                    <td>{{$m -> gender}}</td>
                                    <td>{{$m -> jurusan}}</td>
                                    <td>{{$m -> bidang_minat}}</td>
                                    <td>
                                        <a href="/mahasiswa/editMahasiswa{{$m -> id}}" class="btn btn-outline-primary",></button>Edit</a>
                                        <a href="/mahasiswa/delete/Mahasiswa{{$m -> id}}" class='<i class="bi bi-x',></button>Hapus</a>
                                    </td>
                                  </tr>
                                @endforeach
                              
                            </tbody>
                          </table>
                          
                    </div>
                </div>
            </div>
            
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>