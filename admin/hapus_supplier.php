<?php
	include('../koneksi.php');
	   $id_supplier = $_GET['id_supplier'];   
	   $queryhapus = mysqli_query($dbconnect, "DELETE FROM supplier WHERE id_supplier = $id_supplier"); 
 
  	if($queryhapus){    
  		?>   
  		<script language="javascript">  
  			alert("Data Berhasil Terhapus");  
  			window.location = "supplier.php";  
  		</script>  
  	<?php
  	  }else{
  	     echo "Upss Something wrong..";
  	       } 
 
?>