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
    <h4 style="text-align: center;">Ubah Data</h4>
<div class="container">
    <form method="post" action="/{{ $kTP->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
      <!-- Modal body -->
      <div class="modal-body">
        <label for="ktp">NIK: </label>
        <input type="text" name="nik" id="nik" class="form-control" value="{{ $kTP->nik }}" required="">
        <label>Foto</label>
        <input type="file" name="image" id="image" class="form-control-file">
        <label for="ktp">Nama: </label>
        <input type="text" name="nama" id="nama" class="form-control" value="{{ $kTP->nama }}" required="">
        <label for="ktp">TTL: </label>
        <input type="text" name="ttl" id="ttl" class="form-control" value="{{ $kTP->ttl }}" required="">
        <label for="ktp">Jenis kelamin: </label>
        <input type="text" name="gender" id="gender" class="form-control" value="{{ $kTP->gender }}" required="">
        <label for="ktp">Gol. Darah: </label>
        <input type="text" name="goldar" id="goldar" class="form-control" value="{{ $kTP->goldar }}" required="">
        <label for="ktp">Alamat: </label>
        <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $kTP->alamat }}" required="">
        <label for="ktp">RT/RW: </label>
        <input type="text" name="rr" id="rr" class="form-control" value="{{ $kTP->rr }}" required="">
        <label for="ktp">Kel/Desa: </label>
        <input type="text" name="kd" id="kd" class="form-control" value="{{ $kTP->kd }}" required="">
        <label for="ktp">Kecamatan: </label>
        <input type="text" name="camat" id="camat" class="form-control" value="{{ $kTP->camat }}" required="">
        <label for="ktp">Agama: </label>
        <input type="text" name="agama" id="agama" class="form-control" value="{{ $kTP->agama }}" required="">
        <label for="ktp">Status Perkawinan: </label>
        <input type="text" name="status" id="status" class="form-control" value="{{ $kTP->status }}" required="">
        <label for="ktp">Pekerjaan: </label>
        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" value="{{ $kTP->pekerjaan }}" required="">
        <label for="ktp">Kewarganegaraan: </label>
        <input type="text" name="warga" id="warga" class="form-control" value="{{ $kTP->warga }}" required="">
        <label for="ktp">Berlaku Hingga: </label>
        <input type="text" name="berlaku" id="berlaku" class="form-control" value="{{ $kTP->berlaku }}" required="">
      </div>

        <button type="submit" class="btn btn-primary">Edit</button>
      </div>
      <br><br>
      </form>

</div>
</body>
</html>
