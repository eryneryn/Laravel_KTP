<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> Data KTP - Eryn</title>
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style type="text/css">
        body{ 
            background: #b2b2ff !important; 
            } 
    </style>
</head>
<body>
    <br><br>
    <h4 style="text-align: center;">Polygon Assignment</h4>
    <!-- <div class="container-fluid"> -->
        <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2>Tabel Data KTP</h2>      
                            </div>
                            <div class="col-lg-6">
                                <div class="text-right">
                                    <a href="/create" type="button" class="btn btn-secondary">
                                      Tambah Data
                                  </a>
                              </div>  
                          </div>
                      </div>

                      <table class="table table-dark table-hover" style="font-size: 9px;">
                        <thead>
                          <tr>
                            <th>NIK</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Tempat/Tgl Lahir</th>
                            <th>Jenis Kelamin</th>
                            <th>Gol. Darah</th>
                            <th>Alamat</th>
                            <th>RT/RW</th>
                            <th>Kel/Desa</th>
                            <th>Kecamatan</th>
                            <th>Agama</th>
                            <th>Status Perkawinan</th>
                            <th>Pekerjaan</th>
                            <th>Kewarga- negaraan</th>
                            <th>Berlaku Hingga</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody id="ktp-list">
                        @foreach( $ktp as $ktpp )
                        <tr>
                            <td>{{ $ktpp->nik }}</td>
                            <td><img src="{{url('Uploads')}}/{{$ktpp->image}}" width="100"></td>
                            <td>{{ $ktpp->nama }}</td>
                            <td>{{ $ktpp->ttl }}</td>
                            <td>{{ $ktpp->gender }}</td>
                            <td>{{ $ktpp->goldar }}</td>
                            <td>{{ $ktpp->alamat }}</td>
                            <td>{{ $ktpp->rr }}</td>
                            <td>{{ $ktpp->kd }}</td>
                            <td>{{ $ktpp->camat }}</td>
                            <td>{{ $ktpp->agama }}</td>
                            <td>{{ $ktpp->status }}</td>
                            <td>{{ $ktpp->pekerjaan }}</td>
                            <td>{{ $ktpp->warga }}</td>
                            <td>{{ $ktpp->berlaku }}</td>
                            <td>
                            <a href="{{ $ktpp->id }}/edit" class="btn btn-success" style="font-size: 12px;">EDIT</a>
                            <form action="{{ $ktpp->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                            <button type="submit" class="btn btn-danger" style="font-size: 12px;">HAPUS</button>
                        </form>
                        </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>

</body>
</html>
