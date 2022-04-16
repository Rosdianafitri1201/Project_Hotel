<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Tambah Data Konsumen</h2>
    <form action="<?=base_url('hotel/action_tambah_data')?>" method="post">
    <table>
        <tr>
            <td>Id konsumen</td>
            <td>:</td>
            <td><input type="text" name="id_konsumen" class="Masukan Nomer Anda"></td>
        </tr>
        <tr>
            <td>Nama depan</td>
            <td>:</td>
            <td><input type="text" name="nama_depan" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama tengah</td>
            <td>:</td>
            <td><input type="text" name="nama_tengah" class="form-control"></td>
        </tr>
        <tr>
            <td>Nama belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang" class="form-control"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea type="text" name="alamat" class="form-control"></textarea></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota" class="form-control"></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><input type="text" name="provinsi" class="form-control"></td>
        </tr>
        <tr>
            <td>Negara</td>
            <td>:</td>
            <td><input type="text" name="negara" class="form-control"></td>
        </tr>
        <tr>
            <td>Nomer identitas</td>
            <td>:</td>
            <td><input type="text" name="no_identitas" class="form-control"></td>
        </tr>
        <tr>
            <td>Nomer tlp</td>
            <td>:</td>
            <td><input type="text" name="no_tlp" class="form-control"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" class="form-control"></td>
        </tr>
        <td colspan="3" class="text-center">
           <button type="submit" class="btn btn-primary">Simpan</button>
           <a href="" class="btn btn-danger">Kembali</a>
        </td>
    </table>
    </form>
</body>
</html>