<!DOCTYPE html>
<html>
<head>
    <title>Korpus Sunda Kuna</title>
</head>

<body>
    <center><h1>KORPUS SUNDA KUNA</h1></center>
    <h2>Formulir Lema Baru</h2>

    <form action="proses-input.php" method="POST">
        <table>
        <tr>
            <td><label for="lema">Lema </label></td>
            <td>:</td>
            <td><input type="text" name="lema"/></td>
        </tr>
        <tr>
            <td><label for="sublema">Sublema </label></td>
            <td>:</td>
            <td><input type="text" name="sublema"/></td>
         </tr>
         <tr>
            <td><label for="kelas_kata">Kelas kata </label></td>
            <td>:</td>
            <td><input type="text" name="kelas_kata"/></td>
         </tr>
         <tr>
            <td><label for="etimologi">Etimologi</label></td>
            <td>:</td>
            <td><input type="text" name="etimologi"/></td>
         </tr>
		 <tr>
            <td><label for="definisi">Definisi</label></td>
            <td>:</td>
            <td><input type="text" name="definisi"/></td>
         </tr>
		 <tr>
            <td><label for="konteks_1">Konteks 1</label></td>
            <td>:</td>
            <td><input type="text" name="konteks_1"/></td>
         </tr>
        </table>
         <tr>
             <input type="submit" value="Simpen" name="simpen">
          </tr>
      </form>

    </body>
</html>