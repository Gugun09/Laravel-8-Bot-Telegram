<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primbon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-lg-12 col-sm-4 mt-5">
                <table class="table table-dark">
                    @if ($nik['message'] == "success")
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <a class="btn btn-primary float-right" href="{{ route('gambar') }}" role="button">Selesai</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{ $nik['data']['nama'] }}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>{{ $nik['data']['tempat_lahir'] }}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{ $nik['data']['jenis_kelamin'] }}</td>
                        </tr>
                        <tr>
                            <td>Nama Provinsi</td>
                            <td>:</td>
                            <td>{{ $nik['data']['namaPropinsi'] }}</td>
                        </tr>
                        <tr>
                            <td>Kabupaten</td>
                            <td>:</td>
                            <td>{{ $nik['data']['namaKabko'] }}</td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td>{{ $nik['data']['namaKec'] }}</td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>:</td>
                            <td>{{ $nik['data']['namaKel'] }}</td>
                        </tr>
                    </tbody>
                    @elseif($nik['message'] == "failed")
                    <tbody>
                        <tr>
                            <td>{{ $nik['data']['pesan'] }}</td>
                            <p><a name="" id="" class="btn btn-primary" href="{{ route('gambar') }}" role="button">Kembali</a></p>
                        </tr>
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</table>
</body>
</html>
