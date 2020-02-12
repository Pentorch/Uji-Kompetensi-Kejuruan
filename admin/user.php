<?php 
include 'header.php'; 
include 'footer.php'; 
?> 
<h2 class="page-header">Data User Pengguna</h2> 
</div>
 <p> 
 	<a href="tambah_user.php" class="btn btn-primary btn-sm" title="Tambah"><i class="fa fa-plus"></i> Tambah</a> </p> 
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
 	 	 				<th>Nama</th> 
 	 	 				<th>Username</th> 
 	 	 				<th>Password</th> 
 	 	 				<th>level</th> 
 	 	 				<th>Aksi</th> </tr> 
 	 	 				</thead> <tbody>  
 	 	 					<?php 
 	 	 						include '../koneksi.php'; $sql = mysqli_query($dbconnect,"select * from user"); 
 	 	 							$a=1; if ($sql === FALSE) {      die (mysqli_error($dbconnect));
 	 	 						 	    } else {
 	 	 						      	    while ($baris=mysqli_fetch_array($sql)){ 
 	 	 						      	    	?>  
 	 	 			<tr>
 	 	 				<td><?php echo $a++; ?></td>
 	 	 				<td><?php echo $baris['nama'] ?></td> 
 	 	 			 	<td><?php echo $baris['username'] ?></td> 
 	 	 			 	<td><?php echo $baris['password'] ?></td> 
 	 	 			 	<td><?php echo $baris['level'] ?></td> 
 	 	 			 	<td><a href="edit_user.php?id_user=<?php echo $baris['id_user']; ?>" class="btn btn-primary btn-sm" >
 	 	 			 		<i class="fa fa-edit"></i></a> ||    
 	 	 			 		<a href="hapus_user.php?id_user=<?php echo $baris['id_user']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Dihapus ?')"><i class="fa fa-trash-o"></i></a>
 	 	 			 	</td>
 	 	 			 </tr> 
 	 	 			 <?php
 	 	 			      }}
 	 	 			          ?>   

 	 	 		</table>  
 	 	 </form> 