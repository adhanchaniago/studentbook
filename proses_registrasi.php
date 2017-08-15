<?php 
include('koneksi.php');
      $target_path = "upload/";
         $pic=($_FILES['FotoLogo']['name']);
             $target_path = $target_path . basename( $_FILES['FotoLogo']['name']); 
                 
         if(move_uploaded_file($_FILES['FotoLogo']['tmp_name'], $target_path)) 
         {
           $query = "insert into ProfileSekolah (KodeSekolah, NmSekolah, NPSN_NSS, Alamat,
                    KodePos,NoTelp,FotoLogo,Kelurahan,Kecamatan,Kab_Kota,Provinsi,Website,
                      Email,NamaKepSek,NIPKepSek,EmailAdmin,PasswordAdmin) 
                       values ('".$_POST["KodeSekolah"]."','".$_POST["NmSekolah"]."','".$_POST["NPSN_NSS"]."',
                        '".$_POST["Alamat"]."','".$_POST["KodePos"]."','".$_POST["NoTelp"]."', '$pic',
                        '".$_POST["Kelurahan"]."','".$_POST["Kecamatan"]."','".$_POST["Kab_Kota"]."',
                           '".$_POST["Provinsi"]."','".$_POST["Website"]."','".$_POST["Email"]."',
                         '".$_POST["NamaKepSek"]."','".$_POST["NIPKepSek"]."','".$_POST["EmailAdmin"]."','".$_POST["PasswordAdmin"]."')";
                     $result = mssql_query($query);
                   echo " <script>
                alert('Terimakasih Sudah Meregistrasikan Sekolah Anda .Data Berhasil Kami Terima , Dan Sedang Menunggu Moderasi. ');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/registrasi.php');
            </script>";
       } 
      else
      {
    echo " <script>
                alert('Silahkan lengkapi data anda. ');  
               window.location.assign('http://".$_SERVER['SERVER_NAME'].":86/studentbook/registrasi.php');
            </script>";
  }
?>