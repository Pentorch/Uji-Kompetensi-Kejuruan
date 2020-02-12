<?php
include 'header.php';
include 'footer.php';
include '../koneksi.php';
		if(isset($_POST['simpan'])){
			$id_supplier = $_POST['id_supplier'];
			$nama_supplier = $_POST['nama_supplier'];
			$alamat_supplier = $_POST['alamat_supplier'];
			$telp_supplier = $_POST['telp_supplier'];
			$kota_supplier = $_POST['kota_supplier'];
			$dbconnect->query ("INSERT INTO supplier VALUES('$id_supplier','$nama_supplier','$alamat_supplier', '$telp_supplier','$kota_supplier')")
			or die (mysqli_error($dbconnect));
			
			if($dbconnect) {
			?>
				<script language="javascript">
					alert("Data Berhasil Ditambahkan");
					window.location = "supplier.php";
				</script>
			<?php
			} else{
				echo "Upss Something wrong..";
				}
			}
			?>

<h3 class="page-header">Tambah Data Supplier</h3> 
<div class="col-lg-6">
	<form role="form" action="" method="POST">               
	     	<input  type="text" name="id_barang" hidden>               
	     	<div class="form-group">                 
	     		<label>Nama Supplier</label>                
	     		<input class="form-control" type="text" name="nama_supplier" placeholder="Masukan Nama Supplier" required>              
	     	</div>             

	     	<div class="form-group"> 
                <label>Alamat Supplier</label>                
                <input class="form-control" type="text" name="alamat_supplier" placeholder="Masukan Alamat Supplier">              
            </div>             
            <div class="form-group">                 
            	<label>Nomor Telpon</label>                 
            	<input class="form-control" type="text" name="telp_supplier" placeholder="Masukan Nomor Telpon Supplier">               
            </div>

            <div class="form-group">
            	<label>Kota Supplier</label>
            	<input class="form-control" type="text" name="kota_supplier" placeholder="Masukan Kota Pemasok Barang">
            </div>
        	<div class="form-group">                 
        		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">             
        	</div>           
    </div>     
    </form> 
</div> 
</div> 