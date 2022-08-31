
<html>
<head>
    <title>Tambah Buku</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit"></td>
            </tr>
            <tr> 
                <td>Tahun Terbit</td>
                <td><input type="text" name="thn_terbit"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into buku table.
    if(isset($_POST['Submit'])) {
        $judul = $_POST['judul'];
        $harga = $_POST['harga'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $thn_terbit = $_POST['thn_terbit'];
        
        
        // include database connection file
        include_once("config.php");
                
        // Insert buku data into table
        $result = mysqli_query($mysqli, "INSERT INTO buku(judul,harga,penulis,penerbit,thn_terbit) VALUES('$judul','$harga','$penulis','$penerbit','$thn_terbit')");
        
        // Show message when buku added
        echo "Buku berhasil ditambahkan. <a href='index.php'>Lihat buku</a>";
    }
    ?>
</body>
</html>
