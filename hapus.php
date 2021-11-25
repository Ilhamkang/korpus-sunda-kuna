<?php
include("config.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM lema WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: data-lema.php');
    } else {
        die("data gagal dihapus");
    }
} else {
    die("akses dilarang!");
}
?>