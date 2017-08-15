<?php
include("../koneksi.php");
$EmailAdmin=$_POST['EmailAdmin'];
$PasswordAdmin=$_POST['PasswordAdmin'];

if ($EmailAdmin == "" || $PasswordAdmin == "")
{
	echo " <script>
                alert('Maaf, userid atau Password anda masih kosong !');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/sekolah/index.php');
            </script>";
}
else
{
session_start();

$sql="select * from ProfileSekolah where (EmailAdmin = '".$_POST['EmailAdmin']."') and (PasswordAdmin = '".($_POST['PasswordAdmin'])."')";
$query=mssql_query($sql);
$row=mssql_fetch_array($query);
if($row["EmailAdmin"]==$EmailAdmin and $row["PasswordAdmin"]==$PasswordAdmin)
{

 	   $_SESSION['KodeSekolah'] = $row['KodeSekolah'];
       $_SESSION['EmailAdmin'] = $row['EmailAdmin'];
       $_SESSION['PasswordAdmin'] = $row['PasswordAdmin'];
       $_SESSION['NamaKepSek'] = $row['NamaKepSek'];
       $_SESSION['FotoLogo'] = $row['FotoLogo'];
{
	echo " <script>
                alert('Akses Diterima');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/sekolah/main_content.php');
            </script>";
}
}
else
{
 echo " <script>
                alert('Data Yang Anda Masukkan Tidak Valid ,Login Gagal !');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/sekolah/index.php');
            </script>";
}
}
?>