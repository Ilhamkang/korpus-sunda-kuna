<?php
include("config.php");

if( !isset($_GET['id']) ){
    header('Location: data-lema.php');
}
$id = $_GET['id'];
$sql = "SELECT * FROM tabel_lema WHERE id=$id";
$query = mysqli_query($db, $sql);
$glosarium = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data teu kapanggih!");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Korpus Sunda Kuna</title>
</head>

<body>
    <center><h1>Korpus Sunda Kuna</h1></center>
    <h2>Formulir Input Lema Baru</h2>

    <form action="proses-edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $glosarium['id'] ?>" />
        
        <table>
        <tr>
            <td><label for="lema">Lema </label></td>
            <td>:</td>
            <td><input type="text" name="lema" value="<?php echo $glosarium['lema'] ?>" /></td>
        </tr>
        <tr>
            <td><label for="sublema">Sublema </label></td>
            <td>:</td>
            <td><input type="text" name="sublema" value="<?php echo $glosarium['sublema'] ?>" /></td>
         </tr>
         <tr>
            <td><label for="kelas_kata">Kelas Kata </label></td>
            <td>:</td>
            <td><input type="text" name="kelas_kata" value="<?php echo $glosarium['kelas_kata'] ?>" /></td>
         </tr>
         <tr>
            <td><label for="etimologi">Etimologi </label></td>
            <td>:</td>
            <td><input type="text" name="etimologi" value="<?php echo $glosarium['etimologi'] ?>" /></td>
         </tr>
		 <tr>
            <td><label for="definisi">Definisi </label></td>
            <td>:</td>
            <td><input type="text" name="definisi" value="<?php echo $glosarium['definisi'] ?>" /></td>
         </tr>
		 <tr>
            <td><label for="konteks_1">Konteks 1 </label></td>
            <td>:</td>
            <td><input type="text" name="konteks_1" value="<?php echo $glosarium['konteks_1'] ?>" /></td>
         </tr>
        </table>      
             <input type="submit" value="Simpen" name="simpen">       
      </form>

    </body>
</html>