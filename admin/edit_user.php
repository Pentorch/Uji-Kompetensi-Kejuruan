<?php
  include 'header.php';
  include 'footer.php'; 
  include "../koneksi.php"; 
  $id_user = $_GET['id_user']; 
 
  $query = mysqli_query($dbconnect, "SELECT * FROM user WHERE id_user = '$id_user'"); 
  $res = mysqli_fetch_array($query);  
?> 
 
		<h3 class="page-header">Edit Data User</h3> 
 
			<div class="col-lg-6">
	  			 <form role="form" action="" method="POST">               
	   				<input  type="text" name="id_user" value="<?php echo $res['id_user'] ?>" hidden>

	                	<div class="form-group">
	                    	<label>Nama User</label>                
	                   		<input class="form-control" type="text" name="nama" placeholder="Masukan Nama User Pengguna" value="<?php echo $res['nama'] ?>" required>              
	                	</div>             

	                  	<div class="form-group">         
	                         <label>Username</label>                
	                         <input class="form-control" type="text" name="username" placeholder="Masukan Username Anda" value="<?php echo $res['username'] ?>">              
	                    </div>             

	                    <div class="form-group">                 
	                    	<label>Password</label>                 
	                    	<input class="form-control" type="text" name="password" placeholder="Masukan Password Anda" value="<?php echo $res['password'] ?>">               
	                    </div>    

	                    <div class="form-group">                 
	                    	<label>Level</label>                 
	                    	<input class="form-control" type="text" name="level" placeholder="Masukan Level User Pengguna" value="<?php echo $res['level'] ?>">               
	                    </div>               
	        </div>              

	               
	                	<div class="form-group">                 
	                		<input type="submit" name="edit" value="Simpan" class="btn btn-primary">             
	                	</div>           
	                </div>     
	            </form> 
	        </div> 
 
 
<?php 
	include "../koneksi.php";   
		if(isset($_POST['edit'])){ 
			$id_user      = $_POST['id_user'];
		   	$nama    = $_POST['nama'];   
		   	$username    = $_POST['username'];   
		   	$password         = $_POST['password'];   
		   	$level        = $_POST['level'];   

		   $queryupdate = mysqli_query($dbconnect,"UPDATE user SET 
		   												id_user    = '$id_user',
		   												nama  = '$nama', 
		   												username  ='$username', 
		   												password       = '$password', 
		   												level      = '$level'
		   											WHERE id_user  = $id_user"); 
 
   		if($queryupdate){
   		    ?>
   		       <script language="javascript">  alert("Data Berhasil DiEdit ");
   		        	 window.location = "user.php";  
   		       </script>  <?php 

   		         }else{
   		             echo "Upss Ada Kesalahan Rasain Bingung LOO..";
   		              }   
   		         } 
 
   ?>