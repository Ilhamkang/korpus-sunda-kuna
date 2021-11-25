<?php
include("config.php");
if(isset($_POST['Simpen'])){

 $lema = $_POST['lema'];
 $sublema = $_POST['sublema'];
 $kelas_kata = $_POST['kelas_kata'];
 $etimologi = $_POST['etimologi'];
 $definisi = $_POST['definisi'];
 $konteks_1 = $_POST['konteks_1'];

 $sql = "INSERT INTO tabel_lema SET lema='$lema', sublema='$sublema', kelas_kata='$kelas_kata', etimologi='$etimologi', definisi='$definisi', konteks_1='$konteks_1')";$query = mysqli_query($db, $sql);

if( $query ) {
      header('Location: index.php?status=sukses');
 } else {
      header('Location: index.php?status=gagal');
 }

} else {
 die("Akses dipahing...");
}
?>