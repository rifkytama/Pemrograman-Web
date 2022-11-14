<?php

class Barang
{

    private $nama;
    private $beratKG;
    private $beratG;
    private $beratMG;
    private $stok;

    
    function __construct($nama, $beratKG, $stok)
    {
        $this->nama = $nama;
        $this->beratKG = $beratKG;
        $this->stok = $stok;
    }

    function get_nama()
    {
        return $this->nama;
    }

    function get_beratKG()
    {
        return $this->beratKG;
    }

    function get_stok()
    {
        return $this->stok;
    }

    function convertBeratG($beratKG)
    {
        $this->beratG = $beratKG * 1000;
        return $this->beratG;
    }

    function convertBeratMG($beratKG)
    {
        $this->beratMG = $beratKG * 1000000;
        return $this->beratMG;
    }
}

$item[0] = new Barang("Telur", 1, 20);
$item[1] = new Barang("Beras", 2, 40);
$item[2] = new Barang("Tepung", 3, 60);
$item[3] = new Barang("Garam", 4, 80);
$item[4] = new Barang("Mie Instant", 5, 100);
$item[5] = new Barang("Minyak", 2, 20);
$indeks = 6
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Praktikum Web 7</title>
</head>

<body>

    <section class="header">
        <h1>Daftar Barang</h1>
    </section>

    <section class="content">

        <section class="head-container">
            <div class="col-container">
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th>Barang</th>
                            <th>Berat (KG)</th>
                            <th>Berat (G)</th>
                            <th>Berat (MG)</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $indeks; $i++) {
                        ?>
                            <tr>
                                <td><?php echo $item[$i]->get_nama() ?></td>
                                <td>
                                    <?php
                                    echo $item[$i]->get_beratKG();
                                    $kilo = $item[$i]->get_beratKG();
                                    ?>
                                </td>
                                <td><?php echo $item[$i]->convertBeratG($kilo) ?></td>
                                <td><?php echo $item[$i]->convertBeratMG($kilo) ?></td>
                                <td><?php echo $item[$i]->get_stok() ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <section class="input-form">
                <div class="box">
                    <form action="" method="POST">
                        <h2>Input Data Barang</h2>
                        <p>* required field</p><br><br>

                        <h4>Nama Barang</h4>
                        <input type="text" name="namabarang" required class="input-form"><br><br>

                        <h4>Berat(KG)</h4>
                        <input type="text" name="berat" required class="input-form"><br><br>

                        <h4>Stok</h4>
                        <input type="text" name="stok" required class="input-form"><br><br>

                        <input type="submit" name="submit" class="btn" value="Submit">
                    </form>
                   
                </div>
            </section>
        </section>
    </section>
</body>
</html>