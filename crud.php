<?php
// var_dump($_POST) cara 1

echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['simpan_buku'])) {
    include "koneksi.php";

    $kode=$_POST['kb'];
    $judul=$_POST['jb'];
    $pengarang=$_POST['pengarang'];
    $penerbit=$_POST['penerbit'];
    $kategori=$_POST['kategori'];
    $jmlbuku=$_POST['jml'];
    $image=$_FILES['img']['name'];
    $lokasi_gambar = $_FILES['img']['tmp_name'];

    $simpan_data =mysqli_query($koneksi, "INSERT INTO buku(kode_buku,judul_buku,pengarang,penerbit,kategori,jumlah,images) VALUES('$kode','$judul',
    '$pengarang','$penerbit','$kategori','$jmlbuku', '$image')");
    if ($simpan_data){
        move_uploaded_file($lokasi_gambar,"gambar/" . $image);
        echo "<script>alert('data berhasil disimpan')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    }else{
        echo "<script>alert('data gagal disimpan')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    }
}

if (isset($_GET['hapus_buku'])){
    $delete_buku = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$_GET(hapus_buku)'");
    if ($delete_buku){
        echo "<script>alert('data berhasil dihapus')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";   
    }else{
        echo "<script>alert('data gagal dihapus')</script>";
        echo "<script>location='media.php?halaman=data_buku'</script>";
    }
}
?>