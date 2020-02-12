<?php 
include 'header.php'; 
include 'footer.php'; 
?> 
<h2 class="page-header">Supplier</h2> 
</div>
 <p> 
 	<a href="tambah_supplier.php" class="btn btn-primary btn-sm" title="Tambah"><i class="fa fa-plus"></i> Tambah Supplier</a> </p> 
 	<!-- /.row -->
 	 <div class="row"> <div class="col-xs-12"> 
 	 	<div class="panel panel-default"> <div class="panel-heading">
 	 	 </div> 
 	 	 <!-- /.panel-heading --> 
 	 	 <div class="panel-body"> <div class="dataTable_wrapper"> 
 	 	 	<table class="table table-striped table-bordered table-hover" id="dataTables-example"> 
 	 	 		<thead> 
 	 	 			<tr> 
 	 	 				<th>No</th> 
 	 	 				<th>Nama Supplier</th> 
 	 	 				<th>Alamat Supplier</th> 
 	 	 				<th>Nomor Telpon Supplier</th> 
 	 	 				<th>Kota Suplier</th> 
 	 	 				<th>Aksi</th> </tr> 
 	 	 				</thead> <tbody>  
 	 	 					<?php 
 	 	 						include '../koneksi.php'; $sql = mysqli_query($dbconnect,"select * from supplier"); 
 	 	 							$a=1; if ($sql === FALSE) {      die (mysqli_error($dbconnect));
 	 	 						 	    } else {
 	 	 						      	    while ($baris=mysqli_fetch_array($sql)){ 
 	 	 						      	    	?>  
 	 	 			<tr>
 	 	 				<td><?php echo $a++; ?></td>
 	 	 				<td><?php echo $baris['nama_supplier'] ?></td> 
 	 	 			 	<td><?php echo $baris['alamat_supplier'] ?></td> 
 	 	 			 	<td><?php echo $baris['telp_supplier'] ?></td> 
 	 	 			 	<td><?php echo $baris['kota_supplier'] ?></td> 
 	 	 			 	<td><a href="edit_supplier.php?id_supplier=<?php echo $baris['id_supplier']; ?>" class="btn btn-primary btn-sm" >
 	 	 			 		<i class="fa fa-edit"></i></a> ||    
 	 	 			 		<a href="hapus_supplier.php?id_supplier=<?php echo $baris['id_supplier']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus ?')"><i class="fa fa-trash-o"></i></a>
 	 	 			 	</td>
 	 	 			 </tr> 
 	 	 			 <?php
 	 	 			      }}
 	 	 			          ?>   

 	 	 		</table>  
 	 	 </form> 