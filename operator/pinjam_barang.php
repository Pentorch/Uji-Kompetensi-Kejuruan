<?php 
	include 'header.php'; 
	include 'footer.php'; 
?> 


<h2 class="page-header">Data Barang Pinjam</h2>
</div> 

<p> <a href="tambah_pinjaman.php" class="btn btn-primary btn-sm" title="Tambah Pinjaman"><i class="fa fa-plus"></i> Tambah peminjaman</a> 
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
			 <th>Nama Peminjam</th> 
			 <th>Tanggal Pinjam</th> 
			 <th>Barang Pinjaman</th> 
			 <th>Jumlah Barang</th>
			 <th>Tanggal Kembali</th> 
			 <th>Kondisi</th> 
			 <th>Aksi</th>
		</tr> 
	</thead> 
		<tbody>  
			<?php 
			include '../koneksi.php'; 
				$sql = mysqli_query($dbconnect,"select pinjam_barang.*, barang.id_barang, barang.nama_barang from barang inner join pinjam_barang on barang.id_barang=pinjam_barang.id_barang"); 
				$a=1; 
					if ($sql === FALSE) { die (mysqli_error($dbconnect));
				 		} else { 
				 			while ($baris=mysqli_fetch_array($sql)){ 
			?>  

			<tr> 
				<td><?php echo $a++; ?></td> 
				<td><?php echo $baris['peminjam'] ?></td> 
				<td><?php echo $baris['tgl_pinjam'] ?></td>
				<td><?php echo $baris['id_barang'] ?></td> 
				<td><?php echo $baris['jumlah_barang'] ?></td> 
				<td><?php echo $baris['tgl_kembali'] ?></td>
				<td><?php echo $baris['kondisi'] ?></td> 
				<td>

					<a href="edit_pinjaman.php?id_pinjam=<?php echo $baris['id_pinjam']; ?>" class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></a> ||    
					<a href="hapus_pinjaman.php?id_pinjam=<?php echo $baris['id_pinjam']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
				</td> 

			</tr> 

<?php
     }}    
?>  
</table>  
</form>