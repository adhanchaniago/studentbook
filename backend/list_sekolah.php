<?php 
include("load_backend/header.php"); ?>
			
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">

            <h2 class="page-title">DAFTAR SEKOLAH</h2>

            <!-- Zero Configuration Table -->
            <div class="panel panel-default">
              <div class="panel-heading">DATA SEKOLAH YANG MENDAFTAR</div>
              <div class="panel-body">
                <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                        <th style="text-align:center">NOMOR</th>
                        <th style="text-align:center">KODE SEKOLAH</th>
                        <th style="text-align:center">NAMA SEKOLAH</th>
                        <th style="text-align:center">EMAIL ADMIN</th>
                        <th style="text-align:center">PASSWORD ADMIN</th>
                        <th style="text-align:center">NAMA KEPSEK</th>
                        <th style="text-align:center">STATUS</th>
                        <th style="text-align:center">LOGO SEKOLAH</th>
                        <th style="text-align:center">ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php
                	  $nomor = 1;
                    $row = mssql_query("select * from ProfileSekolah");
                    while($sql =  mssql_fetch_array($row)){
                    $KodeSekolah = $sql['KodeSekolah'];
                    $NmSekolah = $sql['NmSekolah'];
                    $EmailAdmin = $sql['EmailAdmin'];
                    $PasswordAdmin = $sql['PasswordAdmin'];
                    $NamaKepSek = $sql['NamaKepSek'];
                    $FotoLogo = $sql['FotoLogo'];
                    $Status = $sql['Status'];
                  ?>
                    <tr>
                      <td><?php echo "$nomor" ?>.</td>
                      <td><?php echo "$KodeSekolah" ?></td>
                      <td><?php echo "$NmSekolah" ?></td>
                      <td><?php echo "$EmailAdmin" ?></td>
                      <td><?php echo "$PasswordAdmin" ?></td>
                      <td><?php echo "$NamaKepSek" ?></td>
                      <td><?php if($Status == 0){
                      	echo "<button class='btn btn-warning'>TIDAK AKTIF</button>";
                      }
                      else
                      {
                      	echo "<button class='btn btn-info'>AKTIF</button>";
                      }
                      ?></td>
                      <td style="text-align:center"><img src="../upload/<?php echo "$FotoLogo" ?>" width="60" height="60" onError="this.onerror=null;this.src='../media/no_foto.png';" width="60" height="60" /></td>
                      <td style="text-align:center">
                      <a href='#myModal_<?php echo $KodeSekolah; ?>' class='btn btn-success' data-toggle='modal'> <strong><i class="glyphicon glyphicon-user"></i></strong></a>
    				  <a href="delete_sekolah.php?KodeSekolah=<?php echo $KodeSekolah; ?>" class="btn btn-danger" onClick="return confirm('Anda yakin akah menghapus ini?');">
     				  <i class="fa fa-trash"></i></a>
     				  </td>
                      </tr>
                    </tfoot>
                    <?php
               		 $nomor++;
                		  }
                 	 ?>
                    </table>
                    </div>
                    </div>
           	 	</div>
      				<?php $row = mssql_query("select * from ProfileSekolah");
                    while($sql =  mssql_fetch_array($row)){ 
                    $KodeSekolah = $sql['KodeSekolah'];
                    $NmSekolah = $sql['NmSekolah'];
                    $EmailAdmin = $sql['EmailAdmin'];
                    $PasswordAdmin = $sql['PasswordAdmin'];
                    $NamaKepSek = $sql['NamaKepSek'];
                    $FotoLogo = $sql['FotoLogo'];
                    $Status = $sql['Status'];
                    ?>
					<div class="modal fade" id="myModal_<?php echo $KodeSekolah; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header btn-default">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<p align="center"><font size="4"><strong>Update Status Sekolah</strong></font></p>
						</div>
     			 <div class="modal-body">
      			 <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
					<form id="update" action='update.php' class="form-horizontal" enctype="multipart/form-data" method="post">
  					<input required type='hidden' name='KodeSekolah' value='<?php echo $KodeSekolah; ?>' class='span12'>
                	  	<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                   			<div class="modal-dialog modal-lg">
                        	<div class="modal-content">
                      	 	<div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                           </button>
                       </div>
                       <div class="modal-body">
                 <table id="table" class="table table-striped table-bordered" cellspacing="0" width="2000" border="0">
                <tr>
                 <td width="119"><span class="style8"><font color="black">Kode Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><?php echo $KodeSekolah;?></font></span></td>
                </tr>
                 <tr>
                 <td width="119"><span class="style8"><font color="black">Nama Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><?php echo $NmSekolah;?></font></span></td>
                </tr>
                 <tr>
                 <td width="119"><span class="style8"><font color="black">Kode Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><?php echo $PasswordAdmin;?></font></span></td>
                </tr>
                 <tr>
                 <td width="119"><span class="style8"><font color="black">Email Admin </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><?php echo $EmailAdmin;?></font></span></td>
                </tr>
                 <tr>
                 <td width="119"><span class="style8"><font color="black">Password Admin </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><?php echo $PasswordAdmin;?></font></span></td>
                </tr>
                 <tr>
                 <td width="119"><span class="style8"><font color="black">Nama Kepala Sekolah </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black"><?php echo $NamaKepSek;?></font></span></td>
                </tr>
                <tr>
                 <td width="119"><span class="style8"><font color="black">STATUS </font></span></td>
                  <td width="8"><span class="style8"><font color="black">:</font></span></td>
                  <td width="120"><span class="style8"><font color="black">
                  	<?php if($Status == 0 ){
                	echo "
                <select name='Status' class='form-control'>
                	<option value='0'>TIDAK AKTIF
                	<option value='1'>AKTIF
                	</option>
                </select>";
                       }
                      elseif($Status == 1){
                	echo "
                <select name='Status' class='form-control'>
                	<option value='1'>AKTIF
                	<option value='0'>TIDAK AKTIF
                	</option>
                </select>";
                       }
                      ?></font>
                  </span>
              </td>
               	 </tr>
                     </table>
              </tbody>
          </table>
      </div>
      <div class="modal-footer btn-default">
      <p align="center">
       <input type="submit" class="btn btn-danger" onClick="return confirm('Anda yakin akan mengubah status ini?');" value="UPDATE">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button type="button" class="btn btn-success" data-dismiss="modal"><strong>TUTUP</strong></button>
            </p>
        </form>
             </div>
               </div>
               </div>
               </div>
              <?php
             }
             ?>
          </div>
<?php include("load_backend/footer.php"); ?>


