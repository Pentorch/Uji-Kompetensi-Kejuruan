<?php
  include 'header.php'; 
  include 'footer.php'; 
  include '../koneksi.php'; $id_brg_masuk = $_GET['id_brg_masuk']; 
 
   $query = mysqli_query($dbconnect, "SELECT * FROM barang_masuk WHERE id_brg_masuk = '$id_brg_masuk'"); 
 
   $res = mysqli_fetch_array($query);  
 ?> 
 
<h3 class="page-header">Edit Data Barang Masuk</h3> <div class="col-lg-6"> 
  <form role="form" action="" method="POST">               
    <input  type="text" name="id_brg_masuk" value="<?php echo $res['id_brg_masuk'] ?>" hidden >               
    
    <div class="form-group">                 
      <label>Nama barang</label>                 
        <input class="form-control" id="disabledInput" type="text" name="nama_barang" value="<?php echo $res['nama_barang'] ?>" disabled> 
    </div>              

    <input  type="text" name="id_barang" value="<?php echo $res['id_barang'] ?>" hidden >             
    <div class="form-group">                 
      <label>Tanggal Masuk</label>                
      <div class="input-group date " data-date="" data-dateformat="yyyy-mm-dd">                   
        <input class="form-control" type="date" name="tgl_masuk" id="tanggal" value="<?php echo $res['tgl_masuk'] ?>">          
      </div>              
    </div>             

      
    <div class="form-group">                 
      <label>Jumlah</label>                 
      <input class="form-control" type="text" name="jml_masuk" placeholder="Masukan Jumlah barang Masuk" value="<?php echo $res['jml_masuk'] ?>">               
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
    $id_brg_masuk    = $_POST['id_brg_masuk'];   
    $id_barang        = $_POST['id_barang'];   
    $nama_barang      = $_POST['nama_barang'];   
    $tgl_masuk      = $_POST['tgl_masuk'];   
    $jml_masuk       = $_POST['jml_masuk'];   
    $id_supplier     = $_POST['id_supplier'];    
 
       $queryupdate = mysqli_query($dbconnect,"UPDATE barang_masuk SET id_brg_masuk  = '$id_brg_masuk', id_barang    = '$id_barang', nama_barang  = '$nama_barang', tgl_masuk   = '$tgl_masuk', jml_masuk   = '$jml_masuk', id_supplier  = '$id_supplier' WHERE id_brg_masuk = $id_brg_masuk"); 
 
    if($queryupdate){    ?>   
      <script language="javascript">  
        alert("Data Berhasil DiEdit");  
        window.location = "barang_masuk.php";  
      </script>  
    <?php   
      }else{    
        echo "Upss Something wrong..";   
         }   
      } 
   ?>