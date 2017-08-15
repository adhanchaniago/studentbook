<?php 
    include('koneksi.php');
      $KodeSekolah=$_GET['KodeSekolah'];
        $query = "Delete from ProfileSekolah where KodeSekolah='$KodeSekolah'";
           $result = mssql_query($query);
              if($result){
                   echo " <script>
                alert('Data Berhasil Dihapus. ');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/list_sekolah.php');
            </script>";
          } 
          else
          {
            echo " <script>
             alert('Data Gagal Dihapus. ');  
          window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/backend/list_sekolah.php');
        </script>";
    }
?>