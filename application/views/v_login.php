<!DOCTYPE html>
<html>
<head>
  <title>Login - Sistem Informasi Perpustakaan Malas Ngoding</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-dark">

  <div class="container"> 

    <br/><br/><br/><br/>

    <h3 class="font-weight-normal text-center text-white">LOGIN ADMIN</h3>
    <h5 class="font-weight-normal text-center text-white mb-5">Silahkan login ke panel admin</h5>

    <div class="col-md-4 offset-md-4">
      <div class="card">
        <div class="card-body">
        <?php
            $info = $this->session->flashdata('info');
            if (!empty($info)){
                echo $info;
            }
        ?>

          <h4 class="font-weight-bold text-center mb-3 mt-3">LOGIN</h4>

          

          <form action="<?php echo site_url('admin/login/ceklogin')?>" method="post" name="Login_Form" class="form-signin"> 
            <div class="form-group">
              <label for="username">Username or Email</label>
              <input name="username" type="text" class="form-control" placeholder="Masukkan username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>

</body>
</html>