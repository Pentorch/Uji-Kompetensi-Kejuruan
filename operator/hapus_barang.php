<?php
	include('../koneksi.php');
	   $id_barang = $_GET['id_barang'];   
	   $queryhapus = mysqli_query($dbconnect, "DELETE FROM barang WHERE id_barang = $id_barang"); 
  if($queryhapus){    
?>

<script language="javascript">  
  alert("Data Berhasil Terhapus");  
  window.location = "barang.php";  
</script>  
  	
<?php
} else 
{
  echo "Upss Something wrong..";
} 
 
?>