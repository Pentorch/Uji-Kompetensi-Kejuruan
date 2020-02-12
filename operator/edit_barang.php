<?php
  include 'header.php';
  include 'footer.php'; 
  include "../koneksi.php"; 
  $id_barang = $_GET['id_barang']; 
 
  $query = mysqli_query($dbconnect, "SELECT * FROM barang WHERE id_barang = '$id_barang'"); 
  $res = mysqli_fetch_array($query);  
?> 
 
		<h3 class="page-header">Edit Data Barang</h3> 
 
			<div class="col-lg-6">
	  			 <form role="form" action="" method="POST">               
	   				<input  type="text" name="id_barang" value="<?php echo $res['id_barang'] ?>" hidden>

	                	<div class="form-group">
	                    	<label>Nama barang</label>                
	                   		<input class="form-control" type="text" name="nama_barang" placeholder="Masukan Nama barang" value="<?php echo $res['nama_barang'] ?>" required>              
	                	</div>             

	                  	<div class="form-group">         
	                         <label>Spesifikasi barang</label>                
	                         <input class="form-control" type="text" name="spesifikasi" placeholder="Masukan Spesifikasi Barang" value="<?php echo $res['spesifikasi'] ?>">              
	                    </div>             

	                    <div class="form-group">                 
	                    	<label>Lokasi</label>                 
	                    	<input class="form-control" type="text" name="lokasi" placeholder="Masukan Lokasi barang di tempatkan" value="<?php echo $res['lokasi'] ?>">               
	                    </div>               
	        </div>              

	               
	                <div class="col-lg-6">             
	                	<div class="form-group">                 
	                		<label>Kondisi</label>                
	                		<input class="form-control" type="text" name="kondisi" placeholder="Masukan Kondisi Barang" value="<?php echo $res['kondisi'] ?>">               
	                	</div>             

	                	<div class="form-group">                 
	                		<label>Jumlah</label>                
	                		<input class="form-control" type="text" name="jumlah" placeholder="Masukan Jumlah Barang" value="<?php echo $res['jumlah'] ?>">              
	                	</div>             

	                	<div class="form-group">                 
	                		<label>Sumber Dana</label> 
	                		<input class="form-control" type="text" name="sumber_dana" placeholder="Masukan Sumber Dana barang" value="<?php echo $res['sumber_dana'] ?>">                
	                	</div>             

	                	<div class="form-group">                 
	                		<input type="submit" name="edit" value="Simpan" class="btn btn-primary">             
	                	</div>           
	                </div>     
	            </form> 
	        </div> 
 
 
<?php 
	include "../koneksi.php";   
		if(isset($_POST['edit'])){ 
			$id_barang      = $_POST['id_barang'];
		   	$nama_barang    = $_POST['nama_barang'];   
		   	$spesifikasi    = $_POST['spesifikasi'];   
		   	$lokasi         = $_POST['lokasi'];   
		   	$kondisi        = $_POST['kondisi'];   
		   	$jumlah         = $_POST['jumlah'];   
		   	$sumber_dana    = $_POST['sumber_dana'];

		   $queryupdate = mysqli_query($dbconnect,"UPDATE barang SET 
		   												id_barang    = '$id_barang',
		   												nama_barang  = '$nama_barang', 
		   												spesifikasi  ='$spesifikasi', 
		   												lokasi       = '$lokasi', 
		   												kondisi      = '$kondisi', 
		   												jumlah 		 = '$jumlah', 
		   												sumber_dana  = '$sumber_dana' 
		   											WHERE id_barang  = $id_barang"); 
 
   		if($queryupdate){
   		    ?>
   		       <script language="javascript">  alert("Data Berhasil DiEdit ");
   		        	 window.location = "barang.php";  
   		       </script>  <?php 

   		         }else{
   		             echo "Upss Ada Kesalahan Rasain Bingung LOO..";
   		              }   
   		         } 
 
   ?>