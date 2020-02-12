<?php
  include 'header.php'; 
  include 'footer.php'; 
  include '../koneksi.php'; $id_brg_keluar = $_GET['id_brg_keluar']; 
 
   $query = mysqli_query($dbconnect, "SELECT * FROM barang_keluar WHERE id_brg_keluar = '$id_brg_keluar'"); 
 
   $res = mysqli_fetch_array($query);  
 ?> 
 
<h3 class="page-header">Edit Data Barang keluar</h3> <div class="col-lg-6"> 
    <form role="form" action="" method="POST">               
    	<input  type="text" name="id_brg_keluar" value="<?php echo $res['id_brg_keluar'] ?>" hidden >               
    	<div class="form-group">                 
    		<label>Nama barang</label>                 
    		<input class="form-control" id="disabledInput" type="text" name="nama_barang" value="<?php echo $res['nama_barang'] ?>" disabled> 
    	</div>              

    	<input  type="text" name="id_barang" value="<?php echo $res['id_barang'] ?>" hidden >             
    	<div class="form-group">                 
    		<label>Tanggal Keluar</label>                
    		<div class="input-group date " data-date="" data-dateformat="yyyy-mm-dd">                   
    		<input class="form-control" type="date" name="tgl_keluar" id="tanggal" value="<?php echo $res['tgl_keluar'] ?>"> 
        </div>              
    	</div>             

    	<div class="form-group">                 
    		<label>Jumlah Keluar</label>                 
    		<input class="form-control" type="text" name="jml_keluar" placeholder="Masukan Jumlah barang Keluar" value="<?php echo $res['jml_keluar'] ?>">               
    		</div>             

        <div class="form-group">                 
        <label>Lokasi</label>                 
        <input class="form-control" type="text" name="lokasi" placeholder="Masukan Lokasi" value="<?php echo $res['lokasi'] ?>">               
        </div> 

        <div class="form-group">                 
        <label>Penerima</label>                 
        <input class="form-control" type="text" name="penerima" placeholder="Masukan Penerima Barang" value="<?php echo $res['penerima'] ?>">               
        </div> 

			<div class="form-group">                 
				<input type="submit" name="edit" value="Simpan" class="btn btn-primary">             
			</div>           
		</div>     
	</form> 
</div> 
</div> 


<?php 
	include 'footer.php'; 
?> 

<?php 
	include 'footer.php'; 
?> 

<?php include "../koneksi.php";   
	if(isset($_POST['edit'])){   
		$id_brg_keluar    = $_POST['id_brg_keluar'];   
		$id_barang        = $_POST['id_barang'];   
		$nama_barang      = $_POST['nama_barang'];   
		$tgl_keluar      = $_POST['tgl_keluar'];   
		$jml_keluar       = $_POST['jml_keluar'];   
		$lokasi     = $_POST['lokasi'];
    $penerima     = $_POST['penerima'];    
 
  		 $queryupdate = mysqli_query($dbconnect,"UPDATE barang_keluar SET id_brg_keluar = '$id_brg_keluar', 
                                                                        id_barang     = '$id_barang', 
                                                                        nama_barang   = '$nama_barang', 
                                                                        tgl_keluar    = '$tgl_keluar', 
                                                                        jml_keluar    = '$jml_keluar', 
                                                                        lokasi        = '$lokasi',
                                                                        penerima      ='$penerima' 
                                                                  WHERE id_brg_keluar = $id_brg_keluar"); 
 
   	if($queryupdate){    ?>   
   		<script language="javascript">  
   			alert("Data Berhasil DiEdit");  
   			window.location = "barang_keluar.php";  
   		</script>  
   	<?php   
   		}else{    
   			echo "Upss Something wrong..";   
   			 }   
   		} 
   ?>