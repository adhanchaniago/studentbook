<?php
session_start();
if(!isset($_SESSION['EmailAdmin'])) {
	echo " <script>
                alert('Anda Belum Login');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/bootstrap/backend/index.php');
            </script>";
}
?>
<?php include("load_backend/header.php"); ?>

<?php include("load_backend/body.php"); ?>
<?php include("load_backend/footer.php"); ?>


