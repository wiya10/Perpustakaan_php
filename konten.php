<!--  -->
<?php
if (isset($_GET['page'])) {

    $page = $_GET['page'];

    if (file_exists("$page.php")) {
        include "$page.php";
    }else {
        echo "Halaman tidak ditemukan";
    }
}else {
    include "beranda.php";
}
?>