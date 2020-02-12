<?php
	include('../koneksi.php');
	   $id_brg_keluar = $_GET['id_brg_keluar'];   
	   $queryhapus = mysqli_query($dbconnect, "DELETE FROM barang_keluar WHERE id_brg_keluar = $id_brg_keluar"); 
 
  	if($queryhapus){    
  		?>   
  		<script language="javascript">  
  			alert("Data Berhasil Terhapus");  
  			window.location = "barang_keluar.php";  
  		</script>  
  	<?php
  	  }else{
  	     echo "Upss Ada Kesalahan RASAIN LOOOOL..";
  	       } 
 
?>