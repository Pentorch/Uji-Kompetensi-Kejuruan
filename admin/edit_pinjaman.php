<?php
  include 'header.php';
  include 'footer.php'; 
  include "../koneksi.php"; 
  $id_pinjam = $_GET['id_pinjam']; 
 
  $query = mysqli_query($dbconnect, "SELECT * FROM pinjam_barang WHERE id_pinjam = '$id_pinjam'"); 
  $res = mysqli_fetch_array($query);  
?> 
 
		<h3 class="page-header">Edit Data Pinjaman</h3> 
 
			<div class="col-lg-6">
	  			 <form role="form" action="" method="POST">               
	   				<input  type="text" name="id_pinjam" value="<?php echo $res['id_pinjam'] ?>" hidden>

	                	<div class="form-group">
	                    	<label>Nama Peminjam</label>                
	                   		<input class="form-control" type="text" name="peminjam" placeholder="Masukan Nama peminjam" value="<?php echo $res['peminjam'] ?>" required>              
	                	</div>      

	    				<div class="form-group">                 
      						<label>Tanggal Pinjam</label>                
      						<div class="input-group date " data-date="" data-dateformat="yyyy-mm-dd">                   
        					<input class="form-control" type="date" name="tgl_pinjam" id="tanggal" value="<?php echo $res['tgl_pinjam'] ?>">           
      					</div>              

	                  	<div class="form-group">         
	                         <label>Nama barang</label>                
	                         <input class="form-control" type="text" name="id_barang" placeholder="Masukan Nama Pinjaman" value="<?php echo $res['id_barang'] ?>">              
	                    </div>             

	                    <div class="form-group">                 
	                    	<label>Jumlah Pinjaman</label>                 
	                    	<input class="form-control" type="text" name="jumlah_barang" placeholder="Masukan Jumlah Pinjaman" value="<?php echo $res['jumlah_barang'] ?>">               
	                    </div>               
	        </div>              

	               
	                <div class="col-lg-6">             
	                	<div class="form-group">                 
	                		<label>Tanggal Kembali</label>                
	                		<input class="form-control" type="date" name="tgl_kembali" placeholder="Masukan Tanggal Kembali Barang" value="<?php echo $res['tgl_kembali'] ?>">               
	                	</div>             

	                	<div class="form-group">                 
	                		<label>Kondisi Barang</label>                
	                		<input class="form-control" type="text" name="kondisi" placeholder="Masukan Kondisi Barang" value="<?php echo $res['kondisi'] ?>">              
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
			$id_pinjam      = $_POST['id_pinjam'];
		   	$peminjam    = $_POST['peminjam'];   
		   	$tgl_pinjam    = $_POST['tgl_pinjam'];   
		   	$id_barang         = $_POST['id_barang'];   
		   	$jumlah_barang        = $_POST['jumlah_barang'];   
		   	$tgl_kembali         = $_POST['tgl_kembali'];   
		   	$kondisi    = $_POST['kondisi'];

		   $queryupdate = mysqli_query($dbconnect,"UPDATE pinjam_barang SET 
		   												id_pinjam    = '$id_pinjam',
		   												peminjam  = '$peminjam', 
		   												tgl_pinjam  ='$tgl_pinjam', 
		   												id_barang       = '$id_barang', 
		   												jumlah_barang      = '$jumlah_barang', 
		   												tgl_kembali 		 = '$tgl_kembali', 
		   												kondisi  = '$kondisi' 
		   											WHERE id_pinjam  = $id_pinjam"); 
 
   		if($queryupdate){
   		    ?>
   		       <script language="javascript">  alert("Data Berhasil DiEdit ");
   		        	 window.location = "pinjam_barang.php";  
   		       </script>  <?php 

   		         }else{
   		             echo "Upss Ada Kesalahan Rasain Bingung LOO..";
   		              }   
   		         } 
 
   ?>