<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Dashboard</h2>
						
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">
														Computer</div>
													<div class="stat-panel-title text-uppercase"><font color="white" size="3">
										                  <?php
										                echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?>
										              </font></div>
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">Ip Address</div>
													<div class="stat-panel-title text-uppercase">
														<font color="white" size="3">
										                  <?php
														    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
														      $ip=$_SERVER['HTTP_CLIENT_IP'];
														    }
														    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
														      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
														    }
														    else{
														      $ip=$_SERVER['REMOTE_ADDR'];
														    }
														?>
														<?php echo  $ip;?></font></div>
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-info text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 "> Browser & Os</div>
													<div class="stat-panel-title text-uppercase"><font size="2"><?php
										                echo $_SERVER['HTTP_USER_AGENT']; ?></font></div>
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-warning text-light">
												<div class="stat-panel text-center">
													<div class="stat-panel-number h1 ">
													Now</div>
													<div class="stat-panel-title text-uppercase"><font size="3"><?php echo date('d-M-Y');  ?></font></div>
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="panel panel-danger">
									<div class="panel-heading">Grafik Pendaftaran</div>
									<div class="panel-body">
										<div class="chart">
											<div class="alert alert-dismissible alert-info">
											<button type="button" class="close" data-dismiss="alert"><i class="fa fa-close"></i></button>
											<strong><?php $potongkan_namanya_bah = substr(strtoupper($_SESSION['USER_NAME']),0,5); echo $potongkan_namanya_bah; ?>!
											</strong> Selamat datang <a class="alert-link">di halaman administrator</a>.
										</div>Dalam halaman administrator ini anda berhak untuk melakukan transaksi tambah ,ubah,hapus ,dan pencarian data  <!-- hingga<strong>generate</strong> data menjadi laporan ke dalam bentuk file <strong>pdf</strong> -->.
                    Silahkan gunakan akun anda dengan sebaik-baiknya ,untuk keluar dari aplikasi silahkan pilih menu <strong>Logout</strong> dan pilih ok.</br>
                 <!--  Program ini dibuat untuk management menu ,pembagian hak akses dan user serta transaksi data pada aplikasi kenaikan pangkat PNS pada Polda Sumatera Utara. -->
                </br><strong>This program build on windows ,webserver xampp 1.7.3 ,Sql server database ,Bootstrap3 ,Paralax ,Html5 ,Css3 ,Jquery Accordion ,Javascript combine ajax & serverside PHP programming 5++ version.</strong>
										<!-- <canvas id="dashReport" height="310" width="600"></canvas> -->

<script type="text/javascript">
    var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'graph-area',
            type: 'column'

         },   
         title: {
            text: 'Grafik Administrator'
         },
         xAxis: {
            categories: ['Data :']
         },
         yAxis: {
            title: {
               text: 'List Administrator'
            }
         },
              series:             
            [
          
            <?php 
           $sql   = "select * from USER_MASTER";
            $query = mssql_query($sql);
            while( $ret = mssql_fetch_array($query)){
                $USER_NAME=$ret['USER_NAME'];                     
                 $andre_master   = "SELECT USER_ID FROM USER_MASTER WHERE USER_NAME='$USER_NAME'";        
                 $andre_query = mssql_query($andre_master );
                 while( $data = mssql_fetch_array( $andre_query) ){
                    $USER_ID = $data['USER_ID'];                 
                  }             
                  ?>
                  {
                      name: '<?php echo $USER_NAME; ?>',
                      data: [<?php echo $USER_ID; ?>]
                  },
                  <?php } ?>
            ]
      });
   });  
</script>
											
										</div>
										<div id="legendDiv"></div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="panel panel-success">
									<div class="panel-heading">Data Admnistrator</div>
									<div class="panel-body">
										
										<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th>#</th>
													<th>Username</th>
													<th>Password</th>
													<th>Email</th>
													<th>Foto</th>
												</tr>
											</thead>
											<tbody>
												<?php
                	  $nomor = 1;
                    $row = mssql_query("select * from User_Master");
                    while($sql =  mssql_fetch_array($row)){
                    $USER_ID = $sql['USER_ID'];
                    $USER_NAME = $sql['USER_NAME'];
                    $PASSWORD = $sql['PASSWORD'];
                    $EMAIL = $sql['EMAIL'];
                    $FOTO = $sql['FOTO'];
                    $DATE_CREATED = $sql['DATE_CREATED'];
                    $DATE_MODIFIED = $sql['DATE_MODIFIED	'];
                    $LAST_ACCESS_DATE = $sql['LAST_ACCESS_DATE'];
                  ?> <tr>
                      <td><?php echo "$nomor" ?>.</td>
                      <td><?php echo "$USER_NAME" ?></td>
                      <td><?php echo "$PASSWORD" ?></td>
                      <td><?php echo "$EMAIL" ?></td>
                      <td><img src="../upload/<?php echo "$FOTO" ?>" height="20" width="30" onError="this.onerror=null;this.src='../media/no_foto.png' ;" height="20" width="30"></td>
                  </tr><?php
               		 $nomor++;
                		  }
                 	 ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						
						
					</div>
				</div>

			</div>
		</div>
	</div>