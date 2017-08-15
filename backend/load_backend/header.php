<?php
include("../koneksi.php"); 

session_start();
if(!isset($_SESSION['USER_NAME'])) {
	echo " <script>
                alert('Anda Belum Login');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/index.php');
            </script>";
}
?><!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Studentbook Zona Administrator</title>
	 <link rel="shortcut icon" href="../media/logo_studentbook.jpg">

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
	 <script src="jquery.min.js" type="text/javascript"></script>
    <script src="highcharts.js" type="text/javascript"></script>

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="brand clearfix">
		<a href="main_content.php" class="logo"><font size="2.5" color="white"><strong>Studentbook Administrator</font></strong>
			<!-- <img src="../media/studentbook.jpg" height="200" width="400" class="img-responsive" alt=""> --></a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a><img src="../upload/<?php echo strtoupper($_SESSION['FOTO']); ?>" alt="<?php echo strtoupper($_SESSION['FOTO']); ?>" height="20" width="30" onError="this.onerror=null;this.src='../media/no_foto.png' ;" height="20" width="30">  
					<?php $potongkan_namanya_bah = substr(strtoupper($_SESSION['USER_NAME']),0,5); echo $potongkan_namanya_bah; ?>  <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="logout.php" onClick="return confirm('Apakah anda ingin keluar dari aplikasi ini?');">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="ts-main-content">
		<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
				<li class="ts-label">Search</li>
				<li>
					<input type="text" class="ts-sidebar-search" placeholder="Search here...">
				</li>
				<li class="ts-label">Main</li>
				<li class="open"><a href="main_content.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
				<li><a href="list_sekolah.php"><i class="fa fa-globe"></i> List Sekolah</a></li>
				<!-- <li><a href="forms.html"><i class="fa fa-edit"></i> Forms</a></li>
				<li><a href="charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
				<li><a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown</a>
					<ul>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">2nd level</a></li>
						<li><a href="#">3rd level</a>
							<ul>
								<li><a href="#">3rd level</a></li>
								<li><a href="#">3rd level</a></li>
							</ul>
						</li>
					</ul>
				</li> -->
				<li><a href="#"><i class="fa fa-files-o"></i> Settings</a>
					<ul>
						<li><a href="logout.php" onClick="return confirm('Apakah anda ingin keluar dari aplikasi ini?');">Logout</a></li>
					</ul>
				</li>

				<!-- Account from above -->
				<ul class="ts-profile-nav">
					<li class="ts-account">
						<a><img src="../upload/<?php echo strtoupper($_SESSION['FOTO']); ?>" alt="<?php echo strtoupper($_SESSION['FOTO']); ?>" height="42" width="42"> <strong><?php echo strtoupper($_SESSION['NamaKepSek']); ?></strong> <i class="fa fa-angle-down hidden-side"></i></a>
						<ul>
							<li><a href="logout.php" onClick="return confirm('Apakah anda ingin keluar dari aplikasi ini?');">Logout</a></li>
						</ul>
					</li>
				</ul>

			</ul>
		</nav>
		<div class="content-wrapper">
			<div class="container-fluid">

				

	<!-- Loading Scripts -->
	