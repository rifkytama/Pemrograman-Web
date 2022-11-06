<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Barang</title>
    <meta http-equiv="refresh" content="0" />
    <link rel="stylesheet" href="index.css">
</head>

<?php
$barang = array("Tepung","Telur","Cabai","Gula","Kentang");
$persediaan = array("20","15","12","22","10");
$berat = array("5","3","2","1","3");
?>

<body>
    <section>
    <h1>Konversi Barang</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Berat(Kg)</th>
            <th>Berat(Gram)</th>
            <th>Berat(Mg)</th>
            <th>Persediaan</th>
        </tr>
    </section>
</body>

</html>

<?php
$nomor = 1;
for($x = 0; $x <= 4;$x++) {
?>

<tr>
    <td> <?php echo $nomor++?>  </td>
    <td> <?php echo $barang[$x]?> </td>

    <td> <?php echo $berat[$x]?> </td>
    <?php
    $kg = $berat[$x] * 1000;
    $mg = $berat[$x] * 1000000;
    ?>

    <td> <?php echo $kg?> </td>
    <td> <?php echo $mg?> </td>
    <td> <?php echo $persediaan[$x]?> </td>
</tr>
<?php
}
?>