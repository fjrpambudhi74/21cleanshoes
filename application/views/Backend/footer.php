<!DOCTYPE html>
<html>
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
        
        if(isset($footer)){
         foreach($footer as $row){
          $id = $row->id;
          $image = $row->image;
          $description = $row->description;
          $content = $row->content;

        }

      }
    ?>
   
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
       <h1>
       Service Offer 
       <small>Control Panel</small>
       </h1>
        
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <!-- Main Content -->
      <section class="content">
        <div class="row" >
          <!-- ISI KONTEN -->
          <div class="col-md-6">
          <div class="box">
          <div class="box-header">
          <h3 class="box-title">Footer 1</h3>
	          <form method="post" action="edit_footer" enctype="multipart/form-data">
		            <div class="form-group">
		              <div style="padding: 30px"></div>
		              <input type="text" id="id" name="id" class="form-control hide" value="<?php echo $id ?>">
		              <label class="col-sm-2 control-label">Deskripsi</label>
		              <div class="col-sm-5">
		              <textarea name="description"  class="form-control" id="textarea"><?php echo $description ?></textarea>
		              </div>
		              
		              <div style="padding: 30px"></div>
		              <label class="col-sm-2 control-label">Konten</label>
		              <div class="col-sm-5">
		              <textarea name="content" value="" class="form-control" id="textarea"><?php echo $content ?></textarea>
		              </div>
		           
		              <div style="padding: 30px"></div>              
		                <button type="button" class="btn btn-primary mb-3" class="form-control">Save</button>
		            </div>
	          </form>
      	</div>
  		</div>

      </div>
      <div class="col-md-6">
          <div class="box">
          <div class="box-header">
          <h3 class="box-title">Footer 2</h3>
	          <form method="post" action="edit_footer" enctype="multipart/form-data">
		            <div class="form-group">
		              <div style="padding: 30px"></div>
		              <input type="text" id="id" name="id" class="form-control hide" value="<?php echo $id ?>">
		              <label class="col-sm-2 control-label">Deskripsi</label>
		              <div class="col-sm-5">
		              <textarea name="description"  class="form-control" id="textarea"></textarea>
		              </div>
		              
		              <div style="padding: 30px"></div>
		              <label class="col-sm-2 control-label">Konten</label>
		              <div class="col-sm-5">
		              <textarea name="content" value="" class="form-control" id="textarea"></textarea>
		              </div>
		           
		              <div style="padding: 30px"></div>              
		                <button type="button" class="btn btn-primary mb-3" class="form-control">Save</button>
		            </div>
	          </form>
      		</div>
  		</div>
      </div>

</section>
  
  <!-- <div class="control-sidebar-bg"></div> -->

<?php 
$this->load->view('backend/js');
?>

<script>
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

