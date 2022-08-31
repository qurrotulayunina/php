<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for book update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $judul=$_POST['judul'];
    $harga=$_POST['harga'];
    $penulis=$_POST['penulis'];
    $penerbit=$_POST['penerbit'];
    $thn_terbit=$_POST['thn_terbit'];
        
    // update book data
    $result = mysqli_query($mysqli, "UPDATE buku SET judul='$judul',harga='$harga',penulis='$penulis',penerbit='$penerbit',thn_terbit='$thn_terbit' WHERE id=$id") or die(mysqli_error($mysqli));
    
    // Redirect to homepage to display updated book in list
    header("Location: index.php");
}
?>
<?php
// Display selected book data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetch book data based on id
$result = mysqli_query($mysqli, "SELECT * FROM buku WHERE id=$id") or die(mysqli_error($mysqli));
 
while($buku = mysqli_fetch_array($result))
{
    $judul = $buku['judul'];
    $harga = $buku['harga'];
    $penulis = $buku['penulis'];
    $penerbit = $buku['penerbit'];
    $thn_terbit = $buku['thn_terbit'];
}
?>
<html>
<head>	
    <title>Edit Data Buku</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_buku" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Judul</td>
                <td><input type="text" name="judul" value=<?php echo $judul;?>></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value=<?php echo $harga;?>></td>
            </tr>
            <tr> 
                <td>Penulis</td>
                <td><input type="text" name="penulis" value=<?php echo $penulis;?>></td>
            </tr>
            <tr> 
                <td>Penerbit</td>
                <td><input type="text" name="penerbit" value=<?php echo $penerbit;?>></td>
            </tr>
            <tr> 
                <td>Tahun Terbit</td>
                <td><input type="text" name="thn_terbit" value=<?php echo $thn_terbit;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
