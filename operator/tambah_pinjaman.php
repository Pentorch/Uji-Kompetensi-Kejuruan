<?php
  include 'header.php'; 
  include 'footer.php'; 
  include '../koneksi.php'; 
  if(isset($_POST['simpan'])){   
  	$id_pinjam     = $_POST['id_pinjam'];   
  	$peminjam   = $_POST['peminjam'];   
  	$tgl_pinjam   = $_POST['tgl_pinjam'];   
  	$id_barang        = $_POST['id_barang'];   
  	$jumlah_barang       = $_POST['jumlah_barang'];   
  	$tgl_kembali        = $_POST['tgl_kembali'];   
  	$kondisi   = $_POST['kondisi'];      
  	$dbconnect->query ("INSERT INTO pinjam_barang VALUES('$id_pinjam','$peminjam', '$tgl_pinjam','$id_barang','$jumlah_barang','$tgl_kembali','$kondisi')")    or die (mysqli_error($dbconnect));

    if($dbconnect) {     ?>   
  	<script language="javascript">  
  		alert("Data Berhasil Ditambahkan");  
  		window.location = "pinjam_barang.php";  
  	</script>  

    <?php
      } else{     
      	echo "Upss Salah LOO";
      	    }   
      } 
    ?> 
 
  
<h3 class="page-header">Tambah Data Peminjam</h3> 
 
    <div class="col-lg-6">
        <form role="form" action="" method="POST">               
        <input  type="text" name="id_pinjam" hidden>   


      <div class="form-group">                 
        <label>Nama Peminjam</label>                
        <input class="form-control" type="text" name="peminjam" placeholder="Masukan Nama Peminjam Barang" required>
      </div>             


     <div class="form-group">                 
              <label>Tanggal Pinjam Barang </label>
              <input class="form-control" type="text" name="tgl_pinjam" placeholder="Masukan Tanggal Pinjam Barang Ex: yyyy-mm-dd">        
              </div> 

      <div class="form-group">                 
        
              <label>Nama barang</label>                
                <?php                 
                  include '../koneksi.php';            
                    $result = mysqli_query($dbconnect,"select * from barang");          
                    $jsArray = "var prdName = new Array();\n";
                        echo ' <select class="form-control" name="nama_barang" onchange="document.getElementById(\'prd_name\').value = prdName[this.value]"> <option name="nama_barang">Pilih Nama Barang</option>';                     

                    while ($row = mysqli_fetch_array($result)) {          
                        echo '<option value="' . $row['nama_barang'] . '">' . $row['nama_barang'] . '</option>';                           
                    $jsArray .= "prdName['" . $row['nama_barang'] . "'] = '" . addslashes($row['id_barang']) . "';\n"; }echo '</select>';
                ?>               
          </div>            
            
            <input  type="text" name="id_barang" id="prd_name" value="<?php $row['id_barang']?>" hidden>              
            <script type="text/javascript">                   
              <?php echo 
                $jsArray; 
              ?>                  

            function changeValue(id_pinjam){                     
              document.getElementById('prd_name').value = otoNam['id_pinjam'].id_pinjam;
            } ;                 
            </script> 


    <div class="col-lg-12">     
      <div class="form-group">                 
        <label>Jumlah Barang Pinjaman</label>                
        <input class="form-control" type="text" name="jumlah_barang" placeholder="Masukan Jumlah Barang Yang Di Pinjam">  
      </div>              

    <div class="form-group">                 
              <label>Tanggal kembali Barang </label>
              <input class="form-control" type="text" name="tgl_kembali" placeholder="Masukan Tanggal pengembalian barang Ex: yyyy-mm-dd">        
              </div>          

      <div class="form-group">                 
        <label>Kondisi Barang</label>                
        <input class="form-control" type="text" name="kondisi" placeholder="Masukan Kondisi Terkini Barang Pinjaman">       
      </div>             

      <div class="form-group">                 
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">             
      </div>         
      </div>  
    </div>     
  </form> 
</div> 
</div> 