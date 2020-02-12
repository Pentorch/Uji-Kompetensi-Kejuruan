<?php 
	include 'header.php'; 
	include 'footer.php'; 
?> 


<h2 class="page-header">Data Barang Keluar</h2>
</div> 

<p> <a href="tambah_brg_keluar.php" class="btn btn-primary btn-sm" title="Tambah"><i class="fa fa-plus"></i> Tambah Barang Keluar</a> 
	<!-- /.row --> 
	<div class="row"> 
		<div class="col-xs-12"> 
		<div class="panel panel-default"> 
		<div class="panel-heading"> 
	</div> 

	<!-- /.panel-heading --> 
	<div class="panel-body"> 
		<div class="dataTable_wrapper"> 
			<table class="table table-striped table-bordered table-hover" id="dataTables-example" > 

	<thead> 
		<tr> <th >No</th> 
			 <th>Nama Barang</th> 
			 <th>Tanggal keluar</th> 
			 <th>Jumlah keluar</th> 
			 <th>Lokasi</th>
			 <th>Penerima</th> 
			 <th>Aksi</th> 
		</tr> 
	</thead> 
		<tbody>  
			<?php 
			include '../koneksi.php'; 
				$sql = mysqli_query($dbconnect,"select barang_keluar.*, barang.id_barang, barang.nama_barang from barang inner join barang_keluar on barang.id_barang=barang_keluar.id_barang"); 
				$a=1; 
					if ($sql === FALSE) { die (mysqli_error($dbconnect));
				 		} else { 
				 			while ($baris=mysqli_fetch_array($sql)){ 
			?>  

			<tr> 
				<td><?php echo $a++; ?></td> 
				<td><?php echo $baris['nama_barang'] ?></td> 
				<td><?php echo $baris['tgl_keluar'] ?></td> 
				<td><?php echo $baris['jml_keluar'] ?></td> 
				<td><?php echo $baris['lokasi'] ?></td>
				<td><?php echo $baris['penerima'] ?></td> 
				<td>

					<a href="edit_brg_keluar.php?id_brg_keluar=<?php echo $baris['id_brg_keluar']; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></a> ||    
					<a href="hapus_brg_keluar.php?id_brg_keluar=<?php echo $baris['id_brg_keluar']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></a></td> 

			</tr> 

<?php
     }}    
?>  
</table>  
</form>