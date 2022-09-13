<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>
<body>
    <form action="<?php echo site_url('Welcome/UpdateDataSiswa') ?>" method="post">
        <input class="form-control" type="text" name="nis" value="<?php echo $detail['nis']; ?>" readonly>
        <br>
        <input class="form-control" type="text" name="nama" value="<?php echo $detail['nama']; ?>">
        <br>
        <input class="form-control" type="text" name="alamat" value="<?php echo $detail['alamat']; ?>">
        <br>
        <input class="btn btn-primary" type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>