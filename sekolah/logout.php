<?php
session_start();
unset($_SESSION["EmailAdmin"]);
unset($_SESSION["PasswordAdmin"]);
session_destroy();
echo " <script>
                alert('Anda Berhasil Keluar');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/sekolah/index.php');
            </script>";
/*header("location:index.php");
*/?>