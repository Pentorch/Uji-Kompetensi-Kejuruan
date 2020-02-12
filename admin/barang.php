<?php 
include 'header.php'; 
include 'footer.php'; 
?> 
<h2 class="page-header">Data Barang</h2> 
</div>

<p>
	<a href="tambah_barang.php" class="btn btn-primary btn-sm" title="Tambah"><i class="fa fa-plus"></i> Tambah</a> 
</p> 

 	<!-- /.row -->
 	 <div class="row"> 
 	 	<div class="col-xs-12"> 
 	 	<div class="panel panel-default"> 
 	 	<div class="panel-heading">
 	 </div> 
 	 
 	 <!-- /.panel-heading --> 
 	 <div class="panel-body"> 
 	 	<div class="dataTable_wrapper">
 	 		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 	 			<thead> 
 	 	 			<tr> 
 	 	 				<th>No</th> 
 	 	 				<th>Nama Barang</th> 
 	 	 				<th>Spesifikasi</th> 
 	 	 				<th>Jumlah</th> 
 	 	 				<th>Kondisi</th> 
 	 	 				<th>Lokasi</th> 
 	 	 				<th>Sumber Dana</th> 
 	 	 				<th>Aksi</th> </tr> 
 	 	 				</thead> <tbody>  
 	 	 					<?php 
 	 	 						include '../koneksi.php'; $sql = mysqli_query($dbconnect,"select * from barang"); 
 	 	 							$a=1; if ($sql === FALSE) {      die (mysqli_error($dbconnect));
 	 	 						 	    } else {
 	 	 						      	    while ($baris=mysqli_fetch_array($sql)){ 
 	 	 						      	    	?>  
 	 	 			<tr>
 	 	 				<td><?php echo $a++; ?></td>
 	 	 				<td><?php echo $baris['nama_barang'] ?></td> 
 	 	 			 	<td><?php echo $baris['spesifikasi'] ?></td> 
 	 	 			 	<td><?php echo $baris['jumlah'] ?></td> 
 	 	 			 	<td><?php echo $baris['kondisi'] ?></td> 
 	 	 			 	<td><?php echo $baris['lokasi'] ?></td> 
 	 	 			 	<td><?php echo $baris['sumber_dana'] ?></td> 
 	 	 			 	<td><a href="edit_barang.php?id_barang=<?php echo $baris['id_barang']; ?>" class="btn btn-primary btn-sm" >
 	 	 			 	<i class="fa fa-edit"></i></a> ||    
 	 	 			 	<a href="hapus_barang.php?id_barang=<?php echo $baris['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus ?')"><i class="fa fa-trash-o"></i></a>
 	 	 			 	</td>
 	 	 			 </tr> 
 	 	 			 <?php
 	 	 			      }}
 	 	 			          ?>   

 	 	 		</table>  
 	 	 </form> 