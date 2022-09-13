<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD</title>
</head>
<body>
    <form action="<?php echo site_url('Welcome/AddDataSiswa') ?>" method="post">
        <input class="form-control" type="text" name="nis" placeholder="Masukan nis">
        <br>
        <input class="form-control" type="text" name="nama" placeholder="Masukan nama">
        <br>
        <input class="form-control" type="text" name="alamat" placeholder="Masukan alamat">
        <br>
        <input class="btn btn-primary" type="submit" value="Simpan" name="simpan">
    </form>
</body>
</html>