<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Korpus Sunda Kuna</title>
</head>

<body>
    <center><h1>Korpus Sunda Kuna</h1></center>
    <br>
    <h2>Data Lema yang Telah Terdaftar</h2>

    <nav>
        <a href="tampilan-daftar.php"> [+] Tambah Baru</a>
    </nav>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Lema</th>
                <th>Sublema</th>
                <th>Kelas Kata</th>
                <th>Etimologi</th>
                <th>Definisi</th>
				<th>Konteks 1</th>
            </tr>
        </thead>
        <tbody>      
<?php           
        $sql = "SELECT * FROM tabel_lema";
        $query = mysqli_query($db, $sql);
		        while($glosarium = mysqli_fetch_array($query))
		{
            echo "<tr>";
            echo "<td>".$glosarium['id']."</td>";
            echo "<td>".$glosarium['lema']."</td>";
            echo "<td>".$glosarium['sublema']."</td>";
            echo "<td>".$glosarium['kelas_kata']."</td>";
            echo "<td>".$glosarium['etimologi']."</td>";    
			echo "<td>".$glosarium['definisi']."</td>";
			echo "<td>".$glosarium['konteks_1']."</td>";
			
			echo "<td>";
            echo "<a href='edit-lema.php?id=".$glosarium."'> Edit</a> |";
            echo "<a href='hapus.php?id=".$glosarium."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
?>        </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

</body>
</html>