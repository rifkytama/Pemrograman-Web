<?php
    require 'connect.php';

    
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        document.location.href = 'index.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    
?>

<?php
    $result = query1("SELECT * FROM datakaryawan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>tambah data</title>
</head>
<body>
    <section class="content">
        <h1>Pendaftaran</h1>

        <form action="" method="POST">
    
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <br><br>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" id="email">
            <br><br>
            <label for="alamat">Alamat</label>
            <br>
            <input type="text" name="alamat" id="alamat">
            <br><br>
            <label for="jkelamin">Jenis Kelamin</label>
            <br>
            <select name="jkelamin" id="jkelamin">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
            </select>
            <br><br>
            <label for="jabatan">Jabatan</label>
            <br>
            <input type="text" name="jabatan" id="jabatan">
            <br><br>
            <label for="status">Status Pekerjaan</label>
            <br>
            <select name="status" id="status">
                    <option value="fulltime">Full Time</option>
                    <option value="parttime">Part Time</option>
            </select>
            <br><br>
      
        </form>
        <button type="submit" name="submit" class="submit">submit</button>
    </section>

    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nomor</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Address</td>
            <td>Gender</td>
            <td>Position</td>
            <td>Status</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($result as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["name"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["address"]; ?></td>
            <td><?= $row["gender"]; ?></td>
            <td><?= $row["position"]; ?></td>
            <td><?= $row["status"]; ?></td>
            <td>
                <a href="remove.php?id=<?= $row["id"]; ?>"" class="button">Hapus</a>
            </td>
            <?php $i++; ?>
        </tr>
        <?php endforeach; ?>
</body>
</html>