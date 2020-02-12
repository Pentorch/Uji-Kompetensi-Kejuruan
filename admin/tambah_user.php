<?php
  include 'header.php'; 
  include 'footer.php'; 
  include '../koneksi.php'; 
  if(isset($_POST['simpan'])){   
  	$id_user      = $_POST['id_user'];   
  	$nama         = $_POST['nama'];   
  	$username     = $_POST['username'];   
  	$password     = $_POST['password'];   
  	$level        = $_POST['level'];         
  	$dbconnect->query ("INSERT INTO user VALUES('$id_user','$nama','$username', '$password','level')")or die (mysqli_error($dbconnect));

  if($dbconnect) {     ?>   
  	<script language="javascript">  
  		alert("Data Berhasil Ditambahkan");  
  		window.location = "barang.php";  
  	</script>  
  <?php
      } else{     
      	echo "Upss Something wrong..";
      	    }   
      } 
 
  ?> 
 
  
<h3 class="page-header">Register Pengguna</h3> 
 
	<div class="col-lg-6">
	     <form role="form" action="" method="POST">               
	     	<input  type="text" name="id_user" hidden>               
	     	<div class="form-group">                 
	     		<label>Nama Pengguna</label>                
	     		<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Anda" required>              
	     	</div>             

	     	<div class="form-group"> 
                <label>Username</label>                
                <input class="form-control" type="text" name="username" placeholder="Masukan Username Anda">              
            </div>             
            <div class="form-group">                 
            	<label>Password</label>                 
            	<input class="form-control" type="text" name="password" placeholder="Masukan Password Anda">               
            </div>   

            <div class="form-group">                 
              <label>Level</label>                 
              <input class="form-control" type="text" name="level" placeholder="Masukan Status Pengguna Sebagai">               
            </div>      

        <div class="form-group">                 
        		<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">             
        	</div>           
    </div>     
    </form> 
</div> 
</div> 