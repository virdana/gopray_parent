<!DOCTYPE html>
<html>
	<?php include "head.php" ?>
	
	<body>
 		<div class="admin-container animated right">
			<?php include "header.php" ?>
			<?php include "sidebar.php" ?>
            
            <div class="tab-content">
                <section class="admin-content tab-pane fade in active" role="tabpanel" id="timeline">
                    <div class="row detail-content">
						<div class="col-sm-12">
							<div class="panel panel-default panel-timeline">
								<h3>Ibadah Wajib</h3>
								</br>
								
							   <table class="table table-hove table-responsive" cellspacing="10" width="90%">
									<thead>
										<tr>
											<th></th>
											<th>Waktu</th>
											<th>Poin</th>
											<th>Toleransi</th>
											<th>Aksi</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<th>Subuh</th>
											<td>04.00-05.30</td>
											<td>10</td>
											<td>20 menit</td>
											<td><a href="#" data-toggle="modal" data-target="#myModal" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td> 
										</tr>
										<tr>
											<th>Dhuhur</th>
											<td>11.30-13.45</td>
											<td>10</td>
											<td>20 menit</td>	
											<td><a href="#" data-toggle="modal" data-target="#myModal" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
										</tr>
										<tr>
											<th>Ashar</th>
											<td>14.50-15.10</td>
											<td>10</td>
											<td>20 menit</td>						               
											<td><a href="#" data-toggle="modal" data-target="#myModal" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
									   </tr>
										<tr>
											<th>Maghrib</th>
											<td>17.35-18.10</td>
											<td>10</td>
											<td>20 menit</td>
											<td><a href="#" data-toggle="modal" data-target="#myModal" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
										   
										</tr>
										<tr>
											<th>Isya'</th>
											<td>18.59-24.00</td>
											<td>10</td>
											<td>20 menit</td>
											<td><a href="#" data-toggle="modal" data-target="#myModal" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
										</tr>
										
									</tbody>
								</table>    
							</div>
						</div>
					</div>
                    <div class="row detail-content">
                    <div class="col-sm-6 col-md-6">
                    	<div class="panel panel-default panel-timeline">
						<h3>Ibadah Sunnah</h3>
							</br>
							
                           <table class="table table-hove table-responsive" cellspacing="10" width="90%">
								<tbody>
						            <tr>
										<th>Mengaji</th>
										<td>5 poin</td>
										<td><a href="#" data-toggle="modal" data-target="#myModal2" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
						            </tr>
									<tr>
						                <th>Sholat Sunnah</th>
						                <td>5 poin</td>
										<td><a href="#" data-toggle="modal" data-target="#myModal2" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
						            </tr>
									<tr>
						                <th>Puasa</th>
						                <td>5 poin</td>
										<td><a href="#" data-toggle="modal" data-target="#myModal2" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
						            </tr>
									<tr>
						                <th>Sedekah</th>
						               <td>5 poin</td>
										<td><a href="#" data-toggle="modal" data-target="#myModal2" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
						            </tr>
									<tr>
						                <th>Free Teks</th>
						               <td>5 poin</td>
										<td><a href="#" data-toggle="modal" data-target="#myModal2" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
						            </tr>
						            
						        </tbody>
						    </table>    
                        </div>
                    </div>
					<div class="col-sm-6 col-md-6">
						<div class="panel panel-default panel-timeline">
						<h3>Ibadah Khusus</h3>
						</br>
							<table class="table table-hove table-responsive" cellspacing="10" width="90%">
								<tbody>
									<tr>
										<th>Ibadah Masjid</th>
										<td>2x</td>	
										<td><a href="#" data-toggle="modal" data-target="#myModal3" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
									</tr>
									<tr>
										<th>Puasa Ramadhan</th>
										<td>20</td>
										<td><a href="#" data-toggle="modal" data-target="#myModal3" class="jarak"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
									</tr>
								</tbody>
							</table>    
						</div>
					</div>
				</div>
                </section>
	<!-- Button trigger modal -->
			<!-- Modal -->
				<div class="modal fade modal-white" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content infotrophy-content">
							<div class="modal-header">
                                <h4 class="modal-title" id="myModalLabel">Subuh</h4>
                            </div>
						<div class="modal-body">							
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Range Waktu</label>
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">Menit</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-4 control-label">Toleransi</label>
									<div class="form-group">
										<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">Menit</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-4 control-label">Poin Awal Waktu</label>
										<input type="text" class="form-control" placeholder>					
								</div>
								
								<div class="form-group">
									<label for="inputPassword3" class="col-sm-4 control-label">Poin Akhir Waktu</label>
									<div class="form-group">
										<div class="input-group">
										<input type="text" class="form-control" placeholder>
										</div>
									</div>
								</div>
							</form>					
						  </div>
						  <!-- end modal-body -->
                    
							<div class="modal-footer">
								<button type="button" class="btn btn-green" data-dismiss="modal">Simpan</button>
							</div>
						
						</div>
						<!-- end modal-content -->
                </div>
            </div>

	<!-- Button trigger modal2 -->
			<!-- Modal Ibadah Sunnah-->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				    <h4 class="modal-title" id="myModalLabel">Ibadah Sunnah</h4>
				  </div>
				  
				  
				  <div class="modal-body">
					<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Mengaji</label>
								<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">poin</div>
									</div>
								</div>
								</div>
								<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Sholat Sunnah</label>
									<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">poin</div>
									</div>
									</div>
								</div>
								<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Puasa</label>
									<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">poin</div>
									</div>
									</div>
								</div>
								<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Sedekah</label>
									<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">poin</div>
									</div>
									</div>
								</div>
								<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Free Teks</label>
									<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">poin</div>
									</div>
									</div>
								</div>
								
					</form>				
				   </div>
				   <div class="modal-footer">
						<button type="button" class="btn btn-green" data-dismiss="modal">Simpan</button>
					</div>
				   
				</div>
				</div>
			  </div>
			  <!-- end modal2 -->
			  
			 <!-- Button trigger modal3 -->
			<!-- Modal Ibadah khusus-->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
				    <h4 class="modal-title" id="myModalLabel">Ibadah Khusus</h4>
				  </div>

				  <div class="modal-body">
					<form class="form-horizontal">
							  <div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Ibadah Masjid</label>
									<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">x</div>
									</div>
									</div>
								</div>
								<div class="form-group">
								<label for="inputEmail3" class="col-sm-4 control-label">Puasa Ramadhan</label>
									<div class="col-sm-8">
									<div class="input-group">
										<input type="text" class="form-control" placeholder>
										<div class="input-group-addon">poin</div>
									</div>
									</div>
								</div>	
					</form>					
				   </div>
				   <div class="modal-footer">
						<button type="button" class="btn btn-green" data-dismiss="modal">Simpan</button>
					</div>
				   
				</div>
				</div>
			  </div>
			  <!-- end modal3 -->


                <section class="admin-content tab-pane fade" role="tabpanel" id="summary">
                    <div class="container">
                        <div class="row">
                            <p>a</p>
                        </div>
                    </div>
                </section>
                
            </div>
			</div>
        </div>

        <footer></footer>
        <?php include "foot.php" ?>
        
        <script type="text/javascript">
            // put this page's specific js here
        </script>

	</body>
</html>