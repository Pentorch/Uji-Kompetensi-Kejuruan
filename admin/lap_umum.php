<?php 
	include 'header.php'; 
	include 'footer.php'; 
?> 

<script type="text/javascript">  
	function printDiv(elemenId) {   
		var a = document.getElementById('print-area-2').value;   
		var b = document.getElementById(elemenId).innerHTML; 
		 window.frames["print_frame"].document.title = document.title;
		 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
		 window.frames["print_frame"].window.focus();   
		 window.frames["print_frame"].window.print();  } 
</script> 

<div class="panel panel-warning">                         
	<div class="panel-heading">                 
		<a href="javascript:printDiv('print-area-2');" class="btn btn-primary btn-sm" ><i class="fa fa-print"></i> Print</a> 
</div>                         
	
<div class="panel-body">              
	<div class="well"> 
		<div id="print-area-2"> <center> 
			<img src="../img/smk.png" width="90" align="right">
			<img src="../img/provinsi-.png" width="70" align="left">
				<h3 class="pageheader" style="text-align: center;"><b>PEMERINTAH PROVINSI SUMATERA BARAT <br> DINAS PENDIDIKAN<br>SEKOLAH MENENGAH KEJURUAN <br>(SMK) NEGERI 1 SINTUK TOBOH GADANG</b></h3><h5>Jl. Raya Lubuk Alung - Pauh Kambar KM 4,<br> Kecamatan Sintuk Toboh Gadang, Kabupaten Padang Pariaman, Sumatra Barat</h5><h5>Phone: 300 323 3456 | Fax: 300 323 1456 | Kode Pos: 25581</h5><h5>Website: www.smkn1sintoga.sch.id | Email :<a href=""> smkn1sintuktobohgadang@yahoo.com</a></h5>

			<img src="../img/garis.png" width="1000"></h3> <h2 class="page-header" id="print-area-2">Laporan Data Barang Keseluruhan</h2> <table class="table table-striped table-bordered table-hover"  border="1"> 
				<tr align="center"> 
					<th >No</th> 
					<th>Nama Barang</th> 
					<th>Spesifikasi</th> 
					<th>Jumlah Barang</th> 
					<th>Kondisi</th>
					<th>Lokasi</th> 
					<th>Sumber Dana</th>
				</tr> 
				</thead> 

				<tbody>  
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

				<?php
				     }}    
				?>   
			</table>  
		</form>  
	</center> <p></p>  

	<table> 
   		<tr>
   			<td width="800px">Mengetahui, </td>
   			<td>Sintuk Toboh Gadang</td>
   		</tr>                      

   		<tr>
   			<td height="">Kepala Sekolah</td>
   			<td>Wakil Sarana Prasarana </td>
   		</tr>        

   		<tr height="70px"></tr>       

   		<tr>
   			<td >Drs.Busraini</td>
   			<td>Anwar Sadat,S.Pd,M.Pd.T</td>
   		</tr>       

   		<tr>
   			<td >NIP.196411151988031003</td>
   			<td>NIP.197303242008011004</td>
   		</tr>   
   	</table> 
 
</div>
 </div>
  </div>
   </div>
    </div>
     <iframe id="printing_frame" name="print_frame" src="about:blank" style="display:none;"></iframe>