<?php

require 'connect.php';

//mengambil id yg ingin dihapus
$id = $_GET["id"];

//membuat alert menggunakan javascript
if( hapus($id) > 0) {
    //jika id ada pada database maka if ini jalan
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
?>