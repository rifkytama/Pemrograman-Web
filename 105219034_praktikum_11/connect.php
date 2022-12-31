<?php
        //koneksi ke database
        $conn = mysqli_connect("localhost", "root", "", "105219034_praktikum_11");

        //fungsi untuk mengambil data dari database
        function query1($query){
            global $conn;
            $data = mysqli_query($conn, $query);
            $karyawann = [];
            while( $datakaryawan = mysqli_fetch_assoc($data) ) {
                $karyawann[] = $datakaryawan;
            }
            return $karyawann;
        }

        function tambah($data){
            global $conn;

            $name=$_POST['name'];
            $email=$_POST['email'];
            $alamat=$_POST['alamat'];
            $jkelamin=$_POST['jkelamin'];
            $jabatan=$_POST['jabatan'];
            $status = $_POST['status'];

            $query = "INSERT INTO datakaryawan
                    VALUES
                    ('','$name', '$email', '$alamat', '$jkelamin', '$jabatan', '$status')
                ";
            //menggunakan query untuk menambah data yaitu memerlukan parameter penghubung database dan query sql
            mysqli_query($conn, $query);
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }

        function hapus($id){
            global $conn;
            mysqli_query($conn, "DELETE FROM datakaryawan WHERE id = $id");
            //mengembalikan jumlah pada database,
            //contoh: jika id = 3 terdapat pada database maka akan mereturn nilai 1, jika tidak ada maka return 0
            return mysqli_affected_rows($conn);
        }
?>