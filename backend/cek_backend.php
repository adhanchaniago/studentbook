<?php
include("../koneksi.php");
$USER_NAME=$_POST['USER_NAME'];
$PASSWORD=$_POST['PASSWORD'];

if ($USER_NAME == "" || $PASSWORD == "")
{
	echo " <script>
                alert('Maaf, userid atau Password anda masih kosong !');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/index.php');
            </script>";
}
else
{
session_start();

$sql="select * from USER_MASTER where (USER_NAME = '".$_POST['USER_NAME']."') and (PASSWORD = '".($_POST['PASSWORD'])."')";
$query=mssql_query($sql);
$row=mssql_fetch_array($query);
if($row["USER_NAME"]==$USER_NAME and $row["PASSWORD"]==$PASSWORD)
{

 	   $_SESSION['KodeSekolah'] = $row['KodeSekolah'];
       $_SESSION['USER_NAME'] = $row['USER_NAME'];
       $_SESSION['PASSWORD'] = $row['PASSWORD'];
       $_SESSION['NamaKepSek'] = $row['NamaKepSek'];
       $_SESSION['FotoLogo'] = $row['FotoLogo'];
{
	echo " <script>
                alert('Akses Diterima');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/main_content.php');
            </script>";
}
}
else
{
 echo " <script>
                alert('Data Yang Anda Masukkan Tidak Valid ,Login Gagal !');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/index.php');
            </script>";
}
}
?>