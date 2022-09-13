<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>SISWA</title>
</head>
<body>
<a href="<?php echo site_url('Welcome/VFormAddSiswa')?>" class="btn btn-primary mb-4 fw-bold">Tambah Siswa</a>
<table class="table table-bordered">
    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tools</th>
    </tr>
    <?php
    if(!empty($DataSiswa))
    {
        foreach($DataSiswa as $Siswa)
        {
    ?>
    <tr>
        <td><?php echo $Siswa->nis; ?></td>
        <td><?php echo $Siswa->nama; ?></td>
        <td><?php echo $Siswa->alamat; ?></td>
        <td>
            <a class="btn btn-warning fw-bold" href="<?php echo site_url('Welcome/DataSiswa/'.$Siswa->nis.'/view') ?>">Update</a>
            <a class="btn btn-primary fw-bold" href="<?php echo site_url('Welcome/DeleteDataSiswa/'.$Siswa->nis) ?>">Delete</a>
        </td>
    </tr>
    <?php
        }
    }
    ?>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>