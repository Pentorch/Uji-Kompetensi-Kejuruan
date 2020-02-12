<?php
  include 'header.php'; 
  include 'footer.php'; 
  include '../koneksi.php'; 
    if(isset($_POST['simpan'])){
  	   $id_brg_masuk  = $_POST['id_brg_masuk'];   
  	   $id_barang     = $_POST['id_barang'];   
  	   $nama_barang   = $_POST['nama_barang'];   
  	   $tgl_masuk     = $_POST['tgl_masuk'];   
  	   $jml_masuk     = $_POST['jml_masuk'];   
  	   $id_supplier   = $_POST['id_supplier'];    
       $dbconnect->query ("INSERT INTO barang_masuk VALUES( '$id_brg_masuk',
                                                            '$id_barang',
                                                            '$nama_barang',
                                                            '$tgl_masuk',
                                                            '$jml_masuk',
                                                            '$id_supplier')")  
                                                    or die (mysqli_error($dbconnect));   
    if($dbconnect) {     
 ?>   


 <script language="javascript">
   	alert("Data Berhasil Ditambahkan");  
  	window.location = "barang_masuk.php";  
 </script>  

<?php
  } else {     
  	echo "Upss Ada Kesalahan -_-";
    }   
  } 
?> 
 


<h3 class="page-header">Tambah Data Barang Masuk</h3> 
      <div class="col-lg-6">
       <form role="form" action="" method="POST">               
       		<input  type="text" name="id_brg_masuk" hidden>

      <div class="form-group">                 
       	<label>Nama barang</label>                
        <?php                 
       		include '../koneksi.php';            
       			$result = mysqli_query($dbconnect,"select * from barang");          
       			$jsArray = "var prdName = new Array();\n";
       				echo ' <select class="form-control" name="nama_barang" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]"> <option name="nama_barang">Pilih Nama Barang</option>';                     

       		while ($row = mysqli_fetch_array($result)) {          
       				 echo '<option value="' . $row['nama_barang'] . '">' 
                                      . $row['nama_barang'] . 
                    '</option>';                           
       				$jsArray .= "prdName['" . $row['nama_barang'] . "'] = '" . addslashes($row['id_barang']) . "';\n"; }echo '</select>';
       		?>               
      </div>            
            
       			
            <input  type="text" name="id_barang" id="prd_name" value="<?php $row['id_barang']?>" hidden>              
       			<script type="text/javascript">                   
       				<?php 
              echo $jsArray; 
       				?>                  

	       		function changeValue(id_barang){                     
	       			document.getElementById('prd_name').value = otoNam['id_barang'].id_barang;
            } ;                 
       			</script>             

       			<div class="form-group">                 
              <label>Tanggal Masuk </label>
              <input class="form-control" type="text" name="tgl_masuk" placeholder="Masukan Tanggal Barang Masuk ex :yyyy-mm-dd">               
            </div>         

       			<div class="form-group">                 
       				<label>Jumlah</label>
       				<input class="form-control" type="text" name="jml_masuk" placeholder="Masukan Jumlah barang Masuk">               
       			</div>            

       			<div class="form-group">                 
       				<label>Supplier</label>                
       				<select name="id_supplier" class="form-control">                   
       					<option>Pilih Supplier</option>                     
       						<?php                 
       							include '../koneksi.php';          
       								$result = mysqli_query($dbconnect,"select * from supplier");                 
       									while ($row = mysqli_fetch_array($result)) {                    
       						?>                   
       					<option value="<?php echo $row['id_supplier']; ?>">                  

       						<?php 
       							echo $row['nama_supplier'];
       						?>                  
       					</option>              

	       					<?php
	       					 	} 
	       					?>
	       					?>                 
	       			</select>               
	       		</div>             

	       		<div class="form-group">                 
	       			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">             
	       		</div>           
	       	</div>     
	       </form> 
	   </div> 
	</div> 
	<?php 
		include 'footer.php'; 
	?> 