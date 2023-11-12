<?php

$conn = mysqli_connect("localhost:8084","root","","ciyyo_store");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $kode = $data['kode'];
    $nama = $data['nama'];
    $gambar = $data['gambar'];
    $harga = $data['harga'];
    $stokb = $data['stok'];

    $query = "INSERT INTO semua_barang
        VALUES
        ('','$kode','$nama','$gambar','$harga','$stok')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($no){
    global $conn;
    mysqli_query($conn, "DELETE FROM semua_barang WHERE no = $no");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $no = $data["no"];
    $kode = $data['kode'];
    $nama = $data['nama'];
    $gambar = $data['gambar'];
    $harga = $data['harga'];
    $stokb = $data['stok'];

    $query = "UPDATE semua_barang SET
        kode = '$kode',
        nama = '$nama',
        gambar = '$gambar',
        harga = '$harga',
        stok = '$stok'
        WHERE no = $no
    ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
?>