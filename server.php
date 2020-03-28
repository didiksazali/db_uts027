<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "dbuts_027";

mysql_connect($server, $username, $password) or die("<h1>Koneksi Mysql Error : </h1>" . mysql_error());
mysql_select_db($database) or die("<h1>Koneksi Kedatabase Error : </h1>" . mysql_error());

@$operasi = $_GET['operasi'];

switch ($operasi) {
    case "view":
        /* Source code untuk Menampilkan Barang */

        $query_tampil_barang = mysql_query("SELECT * FROM tabel_produk") or die(mysql_error());
        $data_array = array();
        while ($data = mysql_fetch_assoc($query_tampil_barang)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        //print json_encode($data_array);
        //[{"id":"1","nama":"Unang Rio","alamat":"Pekanbaru"},{"id":"2","nama":"Berkat Junaidi Banurea","Alamat":"Sidikalang"},{"id":"3","nama":"Totok BluesMan Silalahi","Alamat":"Medan"}]

        break;
    case "insert":
        /* Source code untuk Insert Barang */
		@$kode = $_GET['kode_barang'];
		@$nama = $_GET['nama_barang'];
		@$jenis = $_GET['jenis_barang'];
        @$stok = $_GET['stok_barang'];
        @$harga = $_GET['harga_barang'];
        $query_insert_barang = mysql_query("INSERT INTO tabel_produk VALUES(' ', '$kode', '$nama', '$jenis', '$stok', '$harga')");
        if ($query_insert_barang) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Error Inser Biodata " . mysql_error();
        }

        break;
    case "get_barang_by_id":
        /* Source code untuk Edit data dan mengirim data berdasarkan id yang diminta */
        @$id = $_GET['id_barang'];

        $query_tampil_barang = mysql_query("SELECT * FROM tabel_produk WHERE id_barang='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_barang);
        echo "[" . json_encode($data_array) . "]";


        break;
    case "update":
        /* Source code untuk Update Barang */
        @$id = $_GET['id_barang'];
		@$kode = $_GET['kode_barang'];
		@$nama = $_GET['nama_barang'];
		@$jenis = $_GET['jenis_barang'];
        @$stok = $_GET['stok_barang'];
        @$harga = $_GET['harga_barang'];
        $query_update_barang = mysql_query("UPDATE tabel_produk SET kode_barang='$kode', nama_barang='$nama', jenis_barang='$jenis', stok_barang='$stok', harga_barang='$harga' WHERE id_barang='$id'");
        if ($query_update_barang) {
            echo "Update Data Berhasil";
        } else {
            echo mysql_error();
        }
        break;
    case "delete":
        /* Source code untuk Delete Barang */
        @$id = $_GET['id_barang'];
        $query_delete_barang = mysql_query("DELETE FROM tabel_produk WHERE id_barang='$id'");
        if ($query_delete_barang) {
            echo "Delete Data Berhasil";
        } else {
            echo mysql_error();
        }

        break;

    default:
        break;
}
?>