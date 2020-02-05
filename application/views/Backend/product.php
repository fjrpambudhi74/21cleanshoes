<!DOCTYPE html>
<html>
<head>
	<?php 
	$this->load->view('backend/head');
	?>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<?php 
		$this->load->view('backend/header');
		$this->load->view('backend/nav');
		?>
		<?php
        $id = '';
        // $judul = '';
        // $konten_service = '';
        // $logo = '';
       
        // if(isset($service)){
        //  foreach($service as $row){
        //   $id = $row->id;
        //   $judul = $row->judul;
        //   $konten_service = $row->konten_service;
        //   $logo = $row->logo;

      //   }
      // }
    ?>
		
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Product
					<small>Control Panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li class="active">Dashboard</li>
				</ol>
			</section>
			<!-- Main Content -->
			<section class="content">
				<div class="row" style="margin-left:  50px">
					<!-- ISI KONTEN -->
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<button type="button" class="btn btn-primary" class="form-control" data-toggle="modal" data-target="#modal-default">Tambah</button>
							<button type="button" class="btn btn-primary" class="form-control" onclick="return getProductTittle()">Edit Title</button>
							<div class="table-responsive">
								<table id="mytable" class="table table-bordered table-striped table-hover">
									<thead>
										<th width="30px">No</th>
										<th>Image</th>
										<th width="30px">Edit</th>
										<th width="35px">Delete</th>

									</thead>
									<tbody>
										<?php $no = 1;
											foreach ($product as $row) { ?>
											<tr>
												<td><?=$no?></td>
											    <td><img src="<?php echo base_url('assets/img/product/'.$row->image.'');?>" height='70px'></td>
											    <td><p data-placement="top" data-toggle="tooltip" title="Edit">
											    	<button type="button" onclick="return getProductById(<?php echo $row->id; ?>)" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></p>
											    </td>
											    <td><p data-placement="top" data-toggle="tooltip" title="Delete">
											    	<button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#modal-delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
										   </tr>
										<?php $no++; } ?>
									</tbody>
								</table>
								<div class="clearfix"></div>
								<ul class="pagination pull-right">
									<li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-lableledby="edit" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					<h4 class="modal-title contom-align" id="Heading">Edit Your Detail</h4>
				</div>
				<div class="modal-body">
					
				<form id="update_product" action="update_product" enctype="multipart/form-data" method="post">
					<!-- <table style="margin:20px auto;"> -->
			
						<div class="box-body">
							<input type="text" id="id_product" name="id_product" class="form-control hide" value="">
							<label for="image">Upload Image</label>
							<div id="photo-preview" style="width: 150px;"></div> 
							<input type="file" value="" name="image" id="image" class="form-control" >
							
						</div>
					<!-- </table> -->
				
				
				</div>
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>Update
					</button>
				</div>
				</form>
			</div> <!-- Modal content -->
		</div> <!-- Modal Dialog -->
	<!-- </div> Modal Fade -->
</section>

	<div class="control-sidebar-bg"></div>
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Input Product</h4>
				</div>
				<div class="modal-body">
					<form action="tambahproduct" enctype="multipart/form-data" method="post">
						<div class="box-body">
							<label for="logo">Upload Image</label>
							<input type="file" value="" name="image" class="form-control">
						</div>

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="control-sidebar-bg"></div>
	<div class="modal fade" id="modal-title">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Edit Title</h4>
				</div>
				<div class="modal-body">
					<form action="updateProductTittle" enctype="multipart/form-data" method="post">
						<input type="text" id="id_producttittle" name="id" class="form-control hide" value="">
						<div class="box-body">
							<label for="konten">Konten</label>
							<textarea name="konten" value="" id="konten" class="form-control"></textarea>
						</div>

						<div class="box-footer">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal-Delete -->
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
         
                <div class="modal-body">
                    <p>Do you want to proceed?</p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo 'deleteproduct/'.$row->id; ?>"><button value="<?php echo $id ?>" class="btn btn-danger btn-ok">Delete</a></button>
                </div>
            </div>
        </div>
    </div>


<?php 
$this->load->view('backend/js');
?>


<script type="text/javascript">
	function getProductById(id) {
		var data = {
			id : id
		};
		$('#photo-preview').html(''); // show photo
		$.ajax({
			type: 'post',
			url : '<?php echo base_url()?>/Backend/getProductById',
			data : data,
			success : function(response){
				var product = JSON.parse(response);
				var base_url = '<?php echo base_url();?>';
				$("#update_product")[0].reset();

				document.getElementById("id_product").value = product.id;
				// document.getElementById("judul").value = product.judul;
				// document.getElementById("konten").value = product.konten_product;
		
				 $('#photo-preview').append('<img src="'+base_url+'assets/img/product/'+product.image+'" class="img-responsive">'); // show photo
				$('#edit').modal('show');
			}
		});
	}

	function getProductTittle() {
	
		$('#photo-preview').html(''); // show photo
		$.ajax({
			type: 'post',
			url : '<?php echo base_url()?>/Backend/getProductTittle',
			success : function(response){
				var product = JSON.parse(response);
				var base_url = '<?php echo base_url();?>';
				console.log(product.content);
				document.getElementById("id_producttittle").value = product.id;
				document.getElementById("konten").value = product.content;
				// document.getElementById("konten").value = product.konten_product;
		
				$('#modal-title').modal('show');
			}
		});
	}

	function bacaGambar(input) {
   	if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#gambar_nodin').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

	$("#preview_gambar").change(function(){
	  bacaGambar(this);
});

	
</script>
</body>

</html>
