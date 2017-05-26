<!DOCTYPE html>
<html>
  <?php include "head.php" ?>

<body>
  <style type="text/css">
    .ojo-mepet{
      margin: 0 7px 0 7px;
    }
    .btn-20{
      margin-bottom: 20px;
    }
    .flex{
      width: 100%;
    }
  </style>

	<div class="collection-trophy">
        <div class="modal fade modal-white" id="TambahSticker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content infotrophy-content">
                    <div class="modal-header">
                        <h4 class="modal-title" >Tambah Stiker</h4>
                    </div>
                   	<div class="modal-body">
						<form class="form-horizontal ">
						  <div class="form-group ">
						    <label for="inputEmail3" class="col-sm-3 control-label">Nama Sticker</label>
						    <div class="col-sm-9">
						      <input type="email"  class="form-control flex" id="inputEmail3">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label">Cover</label>
						    <div class="col-sm-9">
						      <input type="file" class="form-control flex" id="inputPassword3">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label">Harga Sticker</label>
						    <div class="col-sm-9">
						      <input type="password" class="form-control flex" id="inputPassword3">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-3 control-label">Sticker Set</label>
						    <div class="col-sm-9">
						      <input type="password" class="form-control flex" id="inputPassword3">
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
    </div>
    <div class="collection-trophy">
        <div class="modal fade modal-white" id="TambahPacket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content infotrophy-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Tambah Stiker</h4>
                    </div>
                   	<div class="modal-body">
						<h4 class="modal-title" >KAMINGSUN</h4>          
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-green" data-dismiss="modal">Simpan</button>
                    </div>
				</div>
            </div>
        </div>
    </div>

	<div class="modal fade" id="DetailSticker" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content infotrophy-content">
                    <div class="modal-header">
                    	<div class="row">
                    		<div class="col-sm-4">
                        		<h4 class="modal-title">Detail Stiker</h4>
                    		</div>
                    		<div class="col-sm-8">
                        		<h4 class="modal-title">: This</h4>
                    		</div>
                    		<div class="col-sm-4">
                        		<h4 class="modal-title">ID Stiker</h4>
                    		</div>
                    		<div class="col-sm-8">
                        		<h4 class="modal-title">: DD000000e</h4>
                    		</div>
                    	</div>
                    </div>
                    <div>
      					<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
                    </div>
      			<div class="modal-body">
      				<div class="row">
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/photos/bitmap.png">
      					</div>
      				</div>
      			</div>
      			<div class="modal-footer">
                <button type="button" class="btn btn-green" data-dismiss="modal">Simpan</button>
            </div>
    		</div>
  		</div>
	</div>
	<div class="modal fade" id="DetailPacket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content infotrophy-content">
                    <div class="modal-header">
                        <div class="row">
                    		<div class="col-sm-4">
                        		<h4 class="modal-title">Detail Paket</h4>
                    		</div>
                    		<div class="col-sm-8">
                        		<h4 class="modal-title">: This</h4>
                    		</div>
                    		<div class="col-sm-4">
                        		<h4 class="modal-title">Harga</h4>
                    		</div>
                    		<div class="col-sm-8">
                        		<h4 class="modal-title">: Rp. 30000</h4>
                    		</div>
                    	</div>
                    </div>
      			<div class="modal-body">
      				<div class="row">
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
      					</div>
      				</div>
      				<div class="row">
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
      					</div>
      					<div class="col-sm-4">
      						<img src="<?php echo URL_IMG?>/thumbnails/praycircle/picture-1.png" class="img-responsive">
      					</div>
      				</div>
      				
      			</div>
      			<div class="modal-footer">
                <button type="button" class="btn btn-green" data-dismiss="modal">Simpan</button>
            </div>
    		</div>
  		</div>
	</div>

	<div class="admin-container animated right">
    <?php include "header.php" ?>
    <?php include "sidebar.php" ?>
            
    <div class="tab-content">
      <section class="admin-content tab-pane fade in active" role="tabpanel" id="timeline">
        <div class="row">
          <div class="col-sm-12 detail-content">
          	<div class="panel panel-default panel-timeline table-responsive">
    				  <div>
    					   <h3 class="text-center">STICKER STORE</h3>
            			<button class="btn btn-default btn-green btn-20" type="submit" data-toggle="modal" data-target="#TambahSticker"><span class="fa fa-plus-square ojo-mepet"></span>Tambah</button>
  				    </div>
              <div class="media media-timeline">

					<table id="example" class="  display " cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>#</th>
				                <th>Nama Sticker</th>
				                <th>harga</th>
				                <th>Aksi</th>
				                <th>Detail</th>
				            </tr>
				            <!-- <tr>
				                <th >Edit</th>
				                <th >Delete</th>
				            </tr> -->
				            
				        </thead>
				        <tfoot>
				            <tr>
				                <th>#</th>
				                <th>Nama Sticker</th>
				                <th>harga</th>
				                <th>Aksi</th>
				                <th>Detail</th>

				            </tr>
				        </tfoot>
				        <tbody>
				            <tr>
				                <td>1</td>
				                <td >this </td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>2</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>3</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>4</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>5</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>6</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>7</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>8</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>9</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>10</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>11</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>12</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>13</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>14</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>15</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>16</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>17</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>18</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>1</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 12.000</td>
				                <td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				            <tr>
				                <td>2</td>
				                <td>Cakmen ribet</td>
				                <td>Rp. 15.000</td>
				               	<td>
				                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
				               
				                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
				                </td>
				                <td>
				                	<a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailSticker"><span class="glyphicon glyphicon-th-large"></span></a>
				                </td>
				            </tr>
				        </tbody>
				      </table>    
    				</div>
          </div>
      </div>
      </section>
    </div>

            <div class="tab-content">
              <section class="admin-content tab-pane fade in active" role="tabpanel" id="timeline">
                <div class="row">
                  <div class="col-sm-12 detail-content">
                    
                  	<div class="panel panel-default panel-timeline  ">
            				<h3 class="text-center">PACKET STICKER</h3>
                		<button class="btn btn-default btn-green btn-20" type="submit" style="margin-bottom: 20px;" data-toggle="modal" data-target="#TambahPacket"><span class="fa fa-plus-square ojo-mepet"></span> Buat Packet</button>
          		<div class="media media-timeline ">
	 							<table id="example1" class="display" cellspacing="0" width="100%">
							        <thead>
							            <tr>
							                <th >#</th>
							                <th >Nama Sticker</th>
							                <th >Harga</th>
							                <th >Aksi</th>
							                <th>Detail</th>
							            </tr>
							        </thead>
							        <tfoot>
							            <tr>
							                <th>#</th>
							                <th>Nama Sticker</th>
							                <th>Harga</th>
							                <th>Aksi</th>
                              <th>Detail</th>
							            </tr>
							        </tfoot>
							        <tbody>
							            <tr>
							                <td>1</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
							                <td>
								                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
								            </td>
							            </tr>
							            <tr>
							                <td>2</td>
							                <td>Paket Ramadhan</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
							                <td>
								                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
								            </td>
							            </tr>
							            <tr>
							                <td>3</td>
							                <td>Cakmen ribet</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
							                <td>
								                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
								            </td>
							            </tr>
							            <tr>
							                <td>4</td>
							                <td>Paket Komplit 1</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
							                <td>
								                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
								              </td>
							            </tr>
							            <tr>
							                <td>5</td>
							                <td>Cakmen ribet</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
							                <td>
								                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
								            </td>
							            </tr>
							            <tr>
							                <td>6</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
							                <td>
								                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
								            </td>
							            </tr>
							            <tr>
							                <td>7</td>
							                <td>Paket Komplit 1</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>8</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>9</td>
							                <td>Paket Ramadhan</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>10</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>11</td>
							                <td>Paket Komplit 1</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>12</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>13</td>
							                <td>Paket Komplit 1</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>14</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>15</td>
							                <td>Paket Komplit 1</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>16</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>17</td>
							                <td>Cakmen ribet</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>18</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>19</td>
							                <td>Cakmen ribet</td>
							                <td>Rp. 12.000</td>
							                <td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							            <tr>
							                <td>20</td>
							                <td>Paket Hemat</td>
							                <td>Rp. 15.000</td>
							               	<td>
							                	<a href="#" class="ojo-mepet" ><span class="glyphicon glyphicon-edit"></span></a>
							               
							                	<a href="#" class="ojo-mepet"><span class="glyphicon glyphicon-trash"></span></a>
							                </td>
                              <td>
                                <a href="#" class="ojo-mepet" data-toggle="modal" data-target="#DetailPacket"><span class="glyphicon glyphicon-th-large"></span></a>
                              </td>
							            </tr>
							        </tbody>
							    </table>    
                    			
                  		</div>
                    </div>
                  </div>
                </section>
            </div>
            
        </div>

        <footer></footer>
        <?php include "foot.php" ?>

        <script type="text/javascript">
            // put this page's specific js here
        </script>

  </body>
</html>