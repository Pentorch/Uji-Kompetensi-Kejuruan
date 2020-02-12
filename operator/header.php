<?php
session_start();
if ($_SESSION['level']=="") {
header("location:index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SMKN 1 SINTUK TOBOH GADANG</title>
        <link rel="icon" type="image/png" href="../img/sintoga.png">
        <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet" type="text/css">
        <link href="../dist/css/timeline.css" rel="stylesheet" type="text/css">
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet" type="text/css">
        <link href="../bower_components/morrisjs/morris.css" rel="stylesheet" type="text/css">
        <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../bower_components/datepicker/css/datepicker.css" rel="stylesheet" type="text/css">
        <link href="../bower_components/datepicker/css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">
.navbar-inverse{
background-color: #cb5209;
color: #fff;
}
.navbar-fixed-bottom{
background-color: #f97322;
color: white;
}
.navbar-default{
background-color: #f9bf22;
}
.navbar-right{
background-color: #f9bf22;
}
.sidebar-nav{
background-color: #f9bf22;
}
body{
background-color: #f9bf22;
}
    </style>


</script> 
</head> 
<body> 
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">             
        <div class="navbar-header">                 
            <button type="button" class="navbar-toggle" datatoggle="collapse" data-target=".navbar-collapse">                     
                <span class="sr-only">Toggle navigation</span>                     
                <span class="icon-bar"></span>                     
                <span class="icon-bar"></span>                     
                <span class="icon-bar"></span>                 
            </button> <a class="navbar-brand" href="home.php">SMKN 1 SINTUK TOBOH GADANG</a>

        </div>                   
    </div>             
    <!-- /.navbar-top-links --> 
    <ul class="nav navbar-right"> 
        <li class="dropdown"> 
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
             <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['username'];?> 
             <i class="fa fa-caret-down"></i>                     
         </a>                     
         <ul class="dropdown-menu dropdown-user">                                                  
            <li class="divider"></li> 
            <li><a href="../logout.php"><i class="fa fasign-out fa-fw"></i> Logout</a>                         
            </li>                     
        </ul>                 
    </li>             
</ul>                     
<!-- /.dropdown-user -->                 
</li>             
<div class="navbar-default sidebar" role="navigation">                 
    <div class="sidebar-nav navbar-collapse">                     
        <ul class="nav" id="side-menu">                                                 
            <li> 
                <a href="home.php"><i class="fa fa-institution fa-fw"></i> Home</a>                         
            </li>   

            <li> 
                <a href="barang.php"><i class="fa fa-th-large fa-fw"></i> Barang</a>                         
            </li>  

            <li> 
                <a href="barang_masuk.php"><i class="fa fa-indent fa-fw"></i> Barang Masuk</a>                         
            </li>  

            <li> 
                <a href="barang_keluar.php"><i class="fa fa-outdent fa-fw"></i> Barang Keluar</a>                         
            </li>  

            <li>
                <a href="pinjam_barang.php"><i class="fa fa-outdent fa-fw"></i>Pinjam Barang</a>
            </li>

            <li> 
            <a href="#"><i class="fa fa-table fa-fw"></i> Laporan <span class="fa arrow"></span></a>

        <ul class="nav nav-second-level"> 
            <ul id="Laporan" class="nav nav-second-level">                             
                <li> 
                    <a href="lap_brg_masuk.php">Laporan Barang Masuk</a>                             
                </li>                             
                <li> 
                    <a href="lap_brg_keluar.php">Laporan Barang Keluar</a>                             
                </li>                             
                <li> 
                    <a href="lap_umum.php">Laporan Umum</a>                             
                </li>                         
            </ul>                     
        </ul>                 
    </li>             
</ul>             
</div>          
</div>         
</nav>               
<div id="page-wrapper">            
<div class="row">                 
<div class="col-ls-12"> 