<?php 
include "header.php"; 
include "footer.php"; 
?>

<h2 class="page-header">Sistem Informasi Sarana dan Prasarana SMKN 1 SINTUK TOBOH GADANG</h2> </div> 


<div class="col-lg-5 col-md-8">                     
	<div class="panel panel-green">                         
		<div class="panel-heading">                             
			<div class="row">
				<div class="col-xs-3">                  
					<i class="fa fa-shopping-cart fa-5x"></i>                                 
				</div>                                 
				<div class="col-xs-9 text-right"> 
<?php include '../koneksi.php'; 
	$result = mysqli_query($dbconnect,"SELECT COUNT(*) AS jml FROM barang"); 
	while ($row = mysqli_fetch_array($result)) {  
		?> <div class="huge">

			<?php echo $row['jml'];
			?></div>        
			<?php 
		}
		?>                                     
			<div>Barang</div>                                 
		</div>                             
	</div>                         
</div>                         
<a href="barang.php">                             
	<div class="panel-footer">  
		<span class="pull-left">View Details</span> 
		<span class="pull-right"><i class="fa fa-arrow-circleright"></i></span>                                 
		<div class="clearfix"></div>                             
	</div>                         
</a>                     
</div>                 
</div>                 



<div class="col-lg-5 col-md-8">                     
	<div class="panel panel-yellow">                         
		<div class="panel-heading">                             
			<div class="row">
				<div class="col-xs-3">                  
					<i class="fa fa-shopping-cart fa-5x"></i>                                 
				</div>                                 
				<div class="col-xs-9 text-right"> 
<?php include '../koneksi.php'; 
	$result = mysqli_query($dbconnect,"SELECT COUNT(*) AS jml FROM barang_masuk"); 
	while ($row = mysqli_fetch_array($result)) {  
		?> <div class="huge">

			<?php echo $row['jml'];
			?></div>        
			<?php 
		}
		?>                                     
			<div>Barang Masuk</div>                                 
		</div>                             
	</div>                         
</div>                         
<a href="barang_masuk.php">                             
	<div class="panel-footer">  
		<span class="pull-left">View Details</span> 
		<span class="pull-right"><i class="fa fa-arrow-circleright"></i></span>                                 
		<div class="clearfix"></div>                             
	</div>                         
</a>                     
</div>                 
</div>                 



<div class="col-lg-5 col-md-8">                     
	<div class="panel panel-red">                         
		<div class="panel-heading">                             
			<div class="row">                                 
				<div class="col-xs-3">                                
				 <i class="fa fa-refresh fa-spin fa-5x fa-fw"></i>  
				 <span class="sr-only"></span>                               
				</div>                                 
				<div class="col-xs-9 text-right"> 
					<?php include '../koneksi.php'; 
						$result = mysqli_query($dbconnect,"SELECT COUNT(*) AS jml FROM barang_keluar"); 
						 while ($row = mysqli_fetch_array($result)) {                    
						 	?> 
						 	<div class="huge">

						 		<?php 
						 		echo $row['jml'];
						 		?>
						 	
						 	</div>                                     
						 		<?php 
						 	} 

						 		?>                                     
						 		<div>Barang Keluar</div>                                
						 		</div>                             
						 	</div>                         
						 </div>                         
						 <a href="barang_keluar.php">                             
						 	<div class="panel-footer">   
						 		<span class="pull-left">View Details</span>   
						 		<span class="pull-right"><i class="fa fa-arrow-circleright"></i> </span>                                 <div class="clearfix"></div>                            
						 		</div>                         
						 	</a>                     
						 </div>                 
						</div>             
					</div> 