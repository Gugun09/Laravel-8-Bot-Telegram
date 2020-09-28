<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cek Nik KTp</title>
    <link rel="icon" href="{{ asset('icon/pisces.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        #tanggaljs, #clock, #lihat_waktu {
            top: 40%;
            left: 40%;
            font-family: Arial,
                Helvetica, sans-serif;
            background: linear-gradient(
                to right, #f32170, #ff6b08,
                #cf23cf, #eedd44);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
    }
        body{
            background: rgb(130,123,255);
            background: radial-gradient(circle, rgba(130,123,255,1) 0%, rgba(9,9,121,1) 50%, rgba(113,228,255,1) 100%);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            @include('waktu')
            <div class="col-md-12">
                <div class="card mt-5 animate__animated animate__fadeInLeft">
                    <div class="card-body">
                        <h5 class="card-title text-center">Pencarian NIK KTP</h5>
                        <p class="card-text text-center">Input Your NIK & Username</p>
                        <form method="get" action="{{ route('hasil') }}">
                            <div class="<div class="form-group">
                                <label for="nama">Nama Anda</label>
                                <input id="nama" class="form-control" type="text" name="nama" placeholder="Input your Name">
                            </div>
                            @error('nama')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <label for="tanggal">Nik Anda</label>
                                <input id="tanggal" class="form-control" type="text" name="nik" placeholder="Input your NIK">
                            </div>
                            @error('nik')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="form-group">
                                <a name="" id="" class="btn btn-primary" href="{{ route('api') }}" role="button">Primbon</a>
                                <button class="btn btn-primary float-right">
                                        Kirim <span class="badge badge-primary"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="{{ asset('js/waktu.js') }}"></script>
</body>
</html>
