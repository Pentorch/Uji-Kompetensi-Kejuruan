<?php
  include 'header.php';
  include 'footer.php'; 
  include "../koneksi.php"; 
  $id_supplier = $_GET['id_supplier']; 
 
   $query = mysqli_query($dbconnect, "SELECT * FROM supplier WHERE id_supplier = '$id_supplier'"); 
   $res = mysqli_fetch_array($query);  
?> 
 
	<h3 class="page-header">Edit Data Supplier</h3> 
 
					<div class="col-lg-6">
	  					 <form role="form" action="" method="POST">               
	   						<input  type="text" name="id_supplier" value="<?php echo $res['id_supplier'] ?>" hidden>

	                <div class="form-group">
	                    	<label>Nama Supplier</label>                
	                   		<input class="form-control" type="text" name="nama_supplier" placeholder="Masukan Nama Supplier" value="<?php echo $res['nama_supplier'] ?>" required>              
	                </div>             

	                <div class="form-group">         
	                         <label>Alamat Supplier</label>                
	                         <input class="form-control" type="text" name="alamat_supplier" placeholder="Masukan Alamat Supplier" value="<?php echo $res['alamat_supplier'] ?>">              
	                </div>                         
	                </div>              

	                <div class="col-lg-6">             
	                	<div class="form-group">                 
	                		<label>Nomor Telpon Supplier</label>                
	                		<input class="form-control" type="text" name="telp_supplier" placeholder="Masukan Nomor Supplier" value="<?php echo $res['telp_supplier'] ?>">               
	                	</div>             

	                	<div class="form-group">                 
	                		<label>Kota Supplier</label>                
	                		<input class="form-control" type="text" name="kota_supplier" placeholder="Masukan Kota Asal Supplier" value="<?php echo $res['kota_supplier'] ?>">              
	                	</div>                       

	                	<div class="form-group">                 
	                		<input type="submit" name="edit" value="Simpan" class="btn btn-primary">             
	                	</div>           
	                </div>     
	            </form> 
	        </div> 
 
 
<?php 
	include "../koneksi.php";   
		if(isset($_POST['edit'])){ $id_barang    = $_POST['id_supplier'];
		   $nama_supplier    = $_POST['nama_supplier'];   
		   $alamat_supplier   = $_POST['alamat_supplier'];   
		   $telp_supplier          = $_POST['telp_supplier'];
		   $kota_supplier       = $_POST['kota_supplier'];
		   $queryupdate = mysqli_query($dbconnect,"UPDATE supplier SET 
		   												id_supplier     = '$id_supplier',       
		   												nama_supplier   = '$nama_supplier', 
		   												alamat_supplier ='$alamat_supplier', 
		   												telp_supplier   = '$telp_supplier', 
		   												kota_supplier   = '$kota_supplier' 
		   											WHERE id_supplier   = $id_supplier"); 
 
   		if($queryupdate){
   		    ?>
   		       <script language="javascript">  
   		       		alert("Data Berhasil DiEdit");
   		        	window.location = "supplier.php";  
   		       </script>  <?php 

   		         }else{
   		             echo "Upss Something wrong..";
   		              }   
   		         } 
 
   ?>