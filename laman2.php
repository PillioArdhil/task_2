<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Detail</title>

</head>

<body>

    <?php
    if (isset($_GET['submit'])) {
        $nama = $_GET['nama'];
        $niy = $_GET['niy'];
        $jabatan = $_GET['pStudi'];
    }
    ?>
    <div class="container_card">
        <h3 class="title">Kartu Tanda Anggota</h3>
        <h4 class="title">Yayasan Pendidikan Islam Al Ihsan</h4>
        <div class="card">
            <div class="image_card">
                <img src="pillio.png" alt="card" width="200" height="200">
            </div>
            <div class="description_card">
                <small>Nama </small>
                <h3><?php echo $nama ?></h3>
                <small>NIY</small>
                <h3><?php echo $niy ?></h3>
                <small>Jabatan </small>
                <h3><?php echo $jabatan ?></p>
            </div>
        </div>
    </div>



</body>

</html>