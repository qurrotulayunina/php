<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all buku data from database
$result = mysqli_query($mysqli, "SELECT * FROM buku ORDER BY id DESC") or die(mysqli_error($mysqli));
?>
 
<html>
<head>    
    <title>Qurrotul A'yunina</title>
</head>
 
<body>
<h2>CRUD PHP</h2>
<h3 style= text-align:center>Data Buku di Perpustakaan</h3>
<a href='add.php'><button>Tambah Buku Baru</button></a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>No</th>
        <th>Judul</th> 
        <th>Harga</th> 
        <th>Penulis</th> 
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>Action</th>
    </tr>
    <?php  
    $no = 0;
    while($buku = mysqli_fetch_array($result)) { 
        $no++;      
        echo "<tr>";
        echo "<td style= text-align:center>$no</td>";
        echo "<td>".$buku['judul']."</td>"; 
        echo "<td>Rp. ".number_format($buku['harga'],2,',','.')."</td>";
        echo "<td>".$buku['penulis']."</td>"; 
        echo "<td>".$buku['penerbit']."</td>"; 
        echo "<td>".$buku['thn_terbit']."</td>"; 
        echo "<td><a href='edit.php?id=$buku[id]'><button>Edit</button></a> | <a href='delete.php?id=$buku[id]'><button>Delete</button></a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
