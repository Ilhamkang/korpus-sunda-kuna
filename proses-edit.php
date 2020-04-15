<?php
include("config.php");

if(isset($_POST['simpen'])){
    $id = $_POST['id'];
    $lema = $_POST['lema'];
    $sublema = $_POST['sublema'];
    $kelas_kata = $_POST['kelas_kata'];
    $etimologi = $_POST['etimologi'];
	$definisi =$_POST['deinisi'];
	$konteks_1 = $_POST['konteks_1'];

    $sql = "UPDATE label SET tabel_lema='$lema', sublema='$sublema', kelas_kata='$kelas_kata', etimologi='$etimologi', definisi='$definisi', konteks_1='$konteks_1' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: data-lema.php');
    } else {
        die("Gagal ngedit");
    }
} else {
    die("Akses dipahing!");
}
?>