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
        
        if(isset($about)){
         foreach($about as $row){
          $id = $row->id;
          $image = $row->image;
          $judul = $row->judul;
          $konten = $row->konten;

        }

      }
    ?>
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        
        <h1>
          About Us 
          <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i>About</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <!-- Main Content -->
      <section class="content">
        <div class="row" style="margin-left: 50px">
          <!-- ISI KONTEN -->
          <form method="post" action="edit_about" enctype="multipart/form-data">
            <div class="form-group">
              <div style="padding: 30px"></div>
              <input type="text" id="id" name="id" class="form-control hide" value="<?php echo $id ?>">
              <label class="col-sm-2 control-label">Judul</label>
              <div class="col-sm-5">
              <textarea name="judul"  class="form-control" ><?php echo $judul ?></textarea>
              </div>

              <div style="padding: 30px"></div>
              <label class="col-sm-2 control-label">Konten</label>
              <div class="col-sm-5">
              <textarea name="konten" value="" class="form-control" ><?php echo $konten ?></textarea>
              </div>



              <div style="padding: 30px"></div>
              <label class="col-sm-2 control-label">Upload Image</label>
              <div class="col-sm-5">
              <?php if ($image !='') { ?>

              <img id='gambar_nodin'  src="<?php echo base_url();?>/assets/img/about/<?php echo $image?>" height='200px'>

              <input  type="file" class="form-control" value="<?php echo $image?>" name="img" id="preview_gambar"  accept="image/x-png, image/gif, image/jpeg"/> 

              <input type="hidden" class="form-control" name="fotoOld"  value="<?=$image?>">  

            <?php } else { ?>

             <img id='gambar_nodin' src='<?php echo base_url()."assets/backend/img/docc.png";?>' height='200px'>
             <input type="file" class="form-control" name="foto" id="preview_gambar" accept="image/x-png, image/gif, image/jpeg"/ required="">  
           
             <?php } ?>  
              </div>

              <div style="padding: 30px"></div>
              <div class="col-sm-5">
                <button type="submit" class="btn btn-primary mb-3" class="form-control">Save</button>
              </div>
            </div>
          </form>
  
  <div class="control-sidebar-bg"></div>
  
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

