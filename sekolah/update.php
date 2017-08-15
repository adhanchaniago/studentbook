<?php 
    include('koneksi.php');
       $KodeSekolah=$_POST['KodeSekolah'];
           $Status=$_POST['Status'];
              $query = "Update ProfileSekolah Set Status='$Status' where KodeSekolah='$KodeSekolah'";
                 $result = mssql_query($query);
                   if($result){
                   echo " <script>
                alert('Data Berhasil Diupdate. ');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/list_sekolah.php');
            </script>";
           } 
          else
          {
           echo " <script>
               alert('Data Gagal Diupdate. ');  
           window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/list_sekolah.php');
      </script>";
     }
?>