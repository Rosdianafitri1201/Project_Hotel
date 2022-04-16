<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align=center> Tampil Data Konsumen </h1>
    <h3 align=center><a href="<?=base_url('hotel/tambah_data')?>"> tambah Data Konsumen </a></h3>
    <table border="1" align=center>
        <thead>
            <tr>
                <th>No</th>
                <th>Id konsumen</th>
                <th>Nama depan</th>
                <th>Nama tengah</th>
                <th>Nama belakang</th>
                <th>Alamat</th>
                <th>Kota</th>
                <th>Provinsi</th>
                <th>Negara</th>
                <th>No identitas</th>
                <th>No tlp</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no= 1; foreach($hotel as $h){ ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $h->id_konsumen ?></td>
                <td><?= $h->nama_depan ?></td>
                <td><?= $h->nama_tengah ?></td>
                <td><?= $h->nama_belakang ?></td>
                <td><?= $h->alamat ?></td>
                <td><?= $h->kota ?></td>
                <td><?= $h->provinsi ?></td>
                <td><?= $h->negara ?></td>
                <td><?= $h->no_identitas ?></td>
                <td><?= $h->no_tlp ?></td>
                <td><?= $h->email ?></td>
                <th><a href="<? base_url('index/Hotel/update_data_konsumen/'.$h->id)?>">Edit</th>
                <th><a href="<? base_url('index/Hotel/update_data_konsumen/'.$h->id)?>">Hapus</th>
            </tr>
            <?php $no++; } ?>
        </tbody>
    </table>
</body>
</html>