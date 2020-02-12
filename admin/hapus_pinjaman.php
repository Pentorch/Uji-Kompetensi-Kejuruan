<?php
	include('../koneksi.php');
	   $id_pinjam = $_GET['id_pinjam'];   
	   $queryhapus = mysqli_query($dbconnect, "DELETE FROM pinjam_barang WHERE id_pinjam = $id_pinjam"); 
  if($queryhapus){    
?>

<script language="javascript">  
  alert("Data Berhasil Terhapus");  
  window.location = "pinjam_barang.php";  
</script>  
  	
<?php
} else 
{
  echo "Upss Something wrong..";
} 
 
?>