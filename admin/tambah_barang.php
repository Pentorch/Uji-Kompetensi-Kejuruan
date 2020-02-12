<?php
  include 'header.php'; 
  include 'footer.php'; 
  include '../koneksi.php'; 
  if(isset($_POST['simpan'])){   
  	$id_barang     = $_POST['id_barang'];   
  	$nama_barang   = $_POST['nama_barang'];   
  	$spesifikasi   = $_POST['spesifikasi'];   
  	$lokasi        = $_POST['lokasi'];   
  	$kondisi       = $_POST['kondisi'];   
  	$jumlah        = $_POST['jumlah'];   
  	$sumber_dana   = $_POST['sumber_dana'];      
  	$dbconnect->query ("INSERT INTO barang VALUES('$id_barang','$nama_barang','$spesifikasi', '$lokasi','$kondisi','$jumlah','$sumber_dana')")    or die (mysqli_error($dbconnect));

    if($dbconnect) {     ?>   
  	<script language="javascript">  
  		alert("Data Berhasil Ditambahkan");  
  		window.location = "barang.php";  
  	</script>  

    <?php
      } else{     
      	echo "Upss Something wrong..";
      	    }   
      } 
    ?> 
 
  
<h3 class="page-header">Tambah Data Barang</h3> 
 
    <div class="col-lg-6">
        <form role="form" action="" method="POST">               
        <input  type="text" name="id_barang" hidden>   


      <div class="form-group">                 
        <label>Nama barang</label>                
        <input class="form-control" type="text" name="nama_barang" placeholder="Masukan Nama barang" required>              
      </div>             


      <div class="form-group"> 
        <label>Spesifikasi barang</label>                
        <input class="form-control" type="text" name="spesifikasi" placeholder="Masukan Spesifikasi Barang">              
      </div>             


      <div class="form-group">                 
        <label>Lokasi</label>                
        <input class="form-control" type="text" name="lokasi" placeholder="Masukan Lokasi barang di tempatkan">               
      </div>               
    </div>   


    <div class="col-lg-6">             
      <div class="form-group">                 
        <label>Kondisi</label>                
        <input class="form-control" type="text" name="kondisi" placeholder="Masukan Kondisi Barang">               
      </div>             

      <div class="form-group">                 
        <label>Jumlah</label>                
        <input class="form-control" type="text" name="jumlah" placeholder="Masukan Jumlah Barang">              
      </div>             

      <div class="form-group">                 
        <label>Sumber Dana</label>                 
        <input class="form-control" type="text" name="sumber_dana" placeholder="Masukan Sumber Dana barang">                
      </div>             
        	
      <div class="form-group">                 
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">             
      </div>           
    </div>     
  </form> 
</div> 
</div> 