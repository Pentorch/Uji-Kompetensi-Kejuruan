<?php
	include('../koneksi.php');
	   $id_brg_masuk = $_GET['id_brg_masuk'];   
	   $queryhapus = mysqli_query($dbconnect, "DELETE FROM barang_masuk WHERE id_brg_masuk = $id_brg_masuk"); 
 
  	if($queryhapus){    
  		?>   
  		<script language="javascript">  
  			alert("Data Berhasil Terhapus");  
  			window.location = "barang_masuk.php";  
  		</script>  
  	<?php
  	  }else{
  	     echo "Upss Something wrong..";
  	       } 
 
?>