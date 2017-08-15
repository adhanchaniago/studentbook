<?php include('load_template/header.php'); ?>
     <body onload="document.form_registrasi.KodeSekolah.focus();">
              <script language="JavaScript">
                    function validate_form( frm ) {
                              if( frm.KodeSekolah.value.length < 1 ) {
                               alert( "Kolom Kode Sekolah Ini Harus Diisi" );
                                   frm.KodeSekolah.focus();
                                     return false;
                                   }
                                   if( frm.NmSekolah.value.length < 1 ) {
                               alert( "Kolom Nama Sekolah Ini Harus Diisi" );
                                   frm.NmSekolah.focus();
                                     return false;
                                   }
                               if( frm.NPSN_NSS.value.length < 1 ) {
                           alert( "Kolom NPSN_NSS Lahir Ini Harus Diisi" );
                                frm.NPSN_NSS.focus();
                                 return false;
                                }
                            if( frm.Alamat.value.length < 1 ) {
                              alert( "Kolom Alamat Ini Harus Diisi" );
                                 frm.Alamat.focus();
                                     return false;
                                   }
                               if( frm.KodePos.value.length < 1 ) {
                             alert( "Kolom Kode Pos Ini Harus Diisi" );
                               frm.KodePos.focus();
                                   return false;
                                 }
                                  if( frm.NoTelp.value.length < 1 ) {
                               alert( "Kolom Nomor Telfon Referensi Ini Harus Diisi" );
                           frm.NoTelp.focus();
                       return false;
                     }
                     if( frm.Kelurahan.value.length < 1 ) {
                              alert( "Kolom Kelurahan Ini Harus Diisi" );
                                 frm.Kelurahan.focus();
                                     return false;
                                   }
                                   if( frm.Kecamatan.value.length < 1 ) {
                              alert( "Kolom Kecamatan Ini Harus Diisi" );
                                 frm.Kecamatan.focus();
                                     return false;
                                   }
                                   if( frm.Kab_Kota.value.length < 1 ) {
                              alert( "Kolom Kab_Kota Ini Harus Diisi" );
                                 frm.Kab_Kota.focus();
                                     return false;
                                   }
                                   if( frm.Provinsi.value.length < 1 ) {
                              alert( "Kolom Provinsi Ini Harus Diisi" );
                                 frm.Provinsi.focus();
                                     return false;
                                   }
                                   if( frm.Website.value.length < 1 ) {
                              alert( "Kolom Website Ini Harus Diisi" );
                                 frm.Website.focus();
                                     return false;
                                   }
                                   if( frm.Email.value.length < 1 ) {
                              alert( "Kolom Email Ini Harus Diisi" );
                                 frm.Email.focus();
                                     return false;
                                   }
                                   if( frm.NamaKepSek.value.length < 1 ) {
                              alert( "Kolom NamaKepSek Ini Harus Diisi" );
                                 frm.NamaKepSek.focus();
                                     return false;
                                   }
                                   if( frm.NIPKepSek.value.length < 1 ) {
                              alert( "Kolom NIPKepSek Ini Harus Diisi" );
                                 frm.NIPKepSek.focus();
                                     return false;
                                   }
                                   if( frm.FotoLogo.value.length < 1 ) {
                              alert( "Kolom FotoLogo Ini Harus Diisi" );
                                 frm.FotoLogo.focus();
                                     return false;
                                   }
                                   if( frm.EmailAdmin.value.length < 1 ) {
                              alert( "Kolom EmailAdmin Ini Harus Diisi" );
                                 frm.EmailAdmin.focus();
                                     return false;
                                   }
                                   if( frm.PasswordAdmin.value.length < 1 ) {
                              alert( "Kolom PasswordAdmin Ini Harus Diisi" );
                                 frm.PasswordAdmin.focus();
                                     return false;
                                   }

                    return true;
                  }
              </script> 
              <div class="col-md-8 articles" id="site-content">
            <article class="posts">
              <h2 class="title-post"><font size="3">Form Pendaftaran Sekolah</font></h2>
                 <div class="meta-post">
                 </div>
                    <div class="content">
                      <form onsubmit="return validate_form(this);"  name="form_registrasi"  enctype="multipart/form-data" action="proses_registrasi.php" method="post">
                      <table id="table" class="table table-striped table-bordered" cellspacing="0" width="2000" border="0">
                    <tr>
                 <td width="119"><span class="style8"><font color="black">Kode Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="KodeSekolah"></font></span></td>
                </tr>
               
                <tr>
                <td width="119"><span class="style8"><font color="black">Nama Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="NmSekolah"></font></span></td>
                </tr>
                <tr>
                <td width="119"><span class="style8"><font color="black">Alamat Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><textarea rows="4" class="form-control" name="Alamat"></textarea></td>
                </tr>
                <tr>
                <td width="119"><span class="style8"><font color="black">Kode Pos </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="KodePos"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Nomor Telfon </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="NoTelp"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Kelurahan </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="NoTelp"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Kecamatan </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="Kecamatan"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Kabupaten Kota </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="Kab_Kota"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Provinsi </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="Provinsi"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Website </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="Website"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">Email </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="Email"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">NamaKepSek </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="NamaKepSek"></font></span></td>
                </tr>
                 <tr>
                <td width="119"><span class="style8"><font color="black">NIPKepSek </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="NIPKepSek"></font></span></td>
                </tr>
                <tr>
                <td width="119"><span class="style8"><font color="black">Email Admin </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="EmailAdmin"></font></span></td>
                </tr>
                <tr>
                <td width="119"><span class="style8"><font color="black">Password Admin </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="text" class="form-control" name="PasswordAdmin"></font></span></td>
                </tr>
                <tr>
                <td width="119"><span class="style8"><font color="black">Logo Sekolah</font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><input type="file" class="form-control" name="FotoLogo"></font></span></td>
                </tr>
                  </table>
                  <p align="center"><input type="submit" class="btn btn-primary" name="submit" value="DAFTAR"></p>
                   </form>
               </div>
              </article>
          </div>
    <?php include('load_template/sidebar_kanan.php');
include('load_template/footer.php'); ?>