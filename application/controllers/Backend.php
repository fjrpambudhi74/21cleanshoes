<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __Construct()
	{
		parent::__construct();
		$this->load->model('M_slider');
		$this->load->model('M_service');	
    $this->load->model('M_product');  
    $this->load->model('M_testimoni');
    $this->load->model('M_setting');
    $this->load->model('M_about');
    $this->load->model('M_login');
    $this->load->library('form_validation');
    if($this->session->userdata('status') != "login"){
			redirect(base_url("admin/login"));
		}
  }

  public function index()
	{
        // load view admin/overview.php
        $this->load->view("Backend/slider");
	}

	public function slider()
	{
		$data['slider'] = $this->M_slider->tampilslider();
		$this->load->view('Backend/slider.php',$data);
	}

	public function service()
	{
		$data['service'] = $this->M_service->tampilservice();

		// $data['service'] = $this->M_service->delete_data();

		$this->load->view('Backend/service.php',$data);
	}

	public function product()
	{
    $data['product'] = $this->M_product->tampilproduct();

		$this->load->view('Backend/product.php',$data);
	}

	public function about()
	{
    $data['about'] = $this->M_about->tampilabout();
		$this->load->view('Backend/about.php',$data);
	}

	public function testimoni()
	{
    $data['testimoni'] = $this->M_testimoni->tampiltestimoni();

		$this->load->view('Backend/testimoni.php',$data);
	}

  public function footer()
  {
    $data['footer'] = $this->M_setting->tampil();

    $this->load->view('Backend/footer.php',$data);
  }

	public function editslider()
	{
		$this->load->library('upload');
        $nmfile = $_FILES['foto']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/slider/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        
        $fotox = $_FILES['foto']['name'];
		if($fotox)
        {
        	//die();
        	    $this->upload->initialize($config);
        		$this->upload->do_upload('foto', $config);
            	
                $gbr = $this->upload->data();
			
                $data = array(
                  'id' => $this->input->post('id_slider'),
                  'gambar' =>$gbr['file_name'],
        				  'judul_slider'=>$this->input->post('judul_slider'),
        				  'konten_slider' =>$this->input->post('konten_slider'),
                );  

                           
              
				$this->M_slider->update_data($data);
				echo"<script> alert('Input Berhasil!'); window.location.href='slider'; </script>";

        } else {
           
        echo"<script> alert('Error! Upload Gagal'); window.location.href='slider'; </script>";
        
        }
	}

	public function tambahservice() {
		$this->load->library('upload');
        $nmfile = $_FILES['logo']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/service/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        
        $fotox = 1; //$_FILES['foto']['name'];
		
		    if($fotox) {
        	
            $this->upload->initialize($config);
            $this->upload->do_upload('logo', $config);
            $gbr = $this->upload->data();



		 	$dataService = array(
				  'konten_service' => $this->input->post('konten'),
				  'judul' => $this->input->post('judul'),
				  'logo' => $gbr['file_name'],
         	);             

			$this->M_service->simpanservice($dataService);
			echo"<script> alert('Input Berhasil!'); window.location.href='service'; </script>";


   	} else {

   		echo"<script> alert('Error! Upload Gagal'); window.location.href='service'; </script>";
   	}

   }

   	public function deleteservice($id) {

   		$hapus = array(
   			'id' => $id
   		);

   		$this->M_service->delete_data($hapus);

   		 redirect('Backend/service');
   	}

    public function getServiceById() {
      $id = $this->input->post('id');

      $service = $this->M_service->getServiceById($id);
      // var_dump($service);

      echo json_encode($service);
    }

   	public function update_service(){
      

      $this->load->library('upload');
        $nmfile = $_FILES['gbr']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/service/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
       
        $fotox = 1;
    
        if($fotox) {
          
            $this->upload->initialize($config);
            $this->upload->do_upload('logo', $config);
            $gbr = $this->upload->data();

        $data = array(
          'id' => $this->input->post('id_service'),
          'judul' => $this->input->post('judul'),
          'konten_service' =>  $this->input->post('konten'),
          'logo' => $gbr['file_name'],
        );

        $this->M_service->update_data($data);

        echo"<script> alert('Input Berhasil!'); window.location.href='service'; </script>";

      } else {

        echo"<script> alert('Error! Upload Gagal'); window.location.href='service'; </script>";
      }
   
     	}

      public function tambahproduct() {
      $this->load->library('upload');
        $nmfile = $_FILES['image']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/product/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        
        $fotox = 1; //$_FILES['foto']['name'];
    
        if($fotox) {
          
            $this->upload->initialize($config);
            $this->upload->do_upload('image', $config);
            $gbr = $this->upload->data();



      $dataProduct = array(
          'image' => $gbr['file_name']
          );             

      $this->M_product->simpanproduct($dataProduct);
      echo"<script> alert('Input Berhasil!'); window.location.href='product'; </script>";


    } else {

      echo"<script> alert('Error! Upload Gagal'); window.location.href='product'; </script>";
    }

   }

   public function getProductById() {
      $id = $this->input->post('id');

      $product = $this->M_product->getProductById($id);
      // var_dump($product);
      // die();

      echo json_encode($product);
    }

   public function getProductTittle() {
      $where = "Product Tittle";
      $product = $this->M_setting->getProductTittle($where);
      // var_dump($product);
      // die();

      echo json_encode($product);
    }

    public function updateProductTittle() {

        $data = array(
          'content' => $this->input->post('konten'),
        );

        $id = $this->input->post('id');
        $where = "Product Tittle";

        $update = $this->M_setting->update_data($id, $data, $where);

        if($update)
          echo"<script> alert('Input Berhasil!'); window.location.href='product'; </script>";
        else
           echo"<script> alert('Input Gagal!'); window.location.href='product'; </script>";
    }

   public function update_product() {
      $this->load->library('upload');
        $nmfile = $_FILES['image']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/product/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        
        $fotox = 1; //$_FILES['foto']['name'];
    
        if($fotox) {
          
            $this->upload->initialize($config);
            $this->upload->do_upload('image', $config);
            $gbr = $this->upload->data();



          $dataProduct = array(
            'id' => $this->input->post('id_product'),
            'image' => $gbr['file_name']
          );             

      // var_dump($dataProduct);
      // die();

      $this->M_product->update_data($dataProduct);
      echo"<script> alert('Input Berhasil!'); window.location.href='product'; </script>";


    } else {

      echo"<script> alert('Error! Upload Gagal'); window.location.href='product'; </script>";
    }

   }

   public function deleteproduct($id) {

      $hapus = array(
        'id' => $id
      );

      $this->M_product->delete_data($hapus);

       redirect('Backend/product');
    }

    public function tambahtestimoni() {
      $this->load->library('upload');
        $nmfile = $_FILES['foto']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/testimoni/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        
        $fotox = 1; //$_FILES['foto']['name'];
    
        if($fotox) {
          
            $this->upload->initialize($config);
            $this->upload->do_upload('foto', $config);
            $gbr = $this->upload->data();



      $dataTestimoni = array(
          'nama' => $this->input->post('nama'),
          'deskripsi' => $this->input->post('deskripsi'),
          'foto' => $gbr['file_name']
          );             

      $this->M_testimoni->simpantestimoni($dataTestimoni);
      echo"<script> alert('Input Berhasil!'); window.location.href='testimoni'; </script>";


    } else {

      echo"<script> alert('Error! Upload Gagal'); window.location.href='testimoni'; </script>";
    }

   }

   public function getTestimoniById() {
      $id = $this->input->post('id');

      $testimoni = $this->M_testimoni->getTestimoniById($id);
      // var_dump($testimoni);


      echo json_encode($testimoni);
    }

      public function update_testimoni(){
      

      $this->load->library('upload');
        $nmfile = $_FILES['foto']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/testimoni/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
       
        $fotox = 1;
    
        if($fotox) {
          
            $this->upload->initialize($config);
            $this->upload->do_upload('foto', $config);
            $gbr = $this->upload->data();

        $data = array(
          'id' => $this->input->post('id_testimoni'),
          'nama' => $this->input->post('nama'),
          'deskripsi' =>  $this->input->post('deskripsi'),
          'foto' => $gbr['file_name'],
        );

        // var_dump($data);
        // die();

        $this->M_testimoni->update_data($data);

        echo"<script> alert('Input Berhasil!'); window.location.href='testimoni'; </script>";

      } else {

        echo"<script> alert('Error! Upload Gagal'); window.location.href='testimoni'; </script>";
       }
   
      }

      public function delete_testimoni($id) {

      $hapus = array(
        'id' => $id
      );

      $this->M_testimoni->delete_data($hapus);

       redirect('Backend/testimoni');
    }

    public function edit_about()
  {
    $this->load->library('upload');
        $nmfile = $_FILES['img']['name']; //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/about/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '10000'; //maksimum besar file 2M
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        
        
        $fotox = $_FILES['img']['name'];
    if($fotox)
        {
          //die();
              $this->upload->initialize($config);
            $this->upload->do_upload('img', $config);
              
                $gbr = $this->upload->data();
      
                $data = array(
                  'id' => $this->input->post('id'),
                  'judul'=>$this->input->post('judul'),
                  'konten' =>$this->input->post('konten'),
                  'image' =>$gbr['file_name'],
                );  
        // var_dump($data);
        // die();
                           
              
        $this->M_about->update_data($data);
        echo"<script> alert('Input Berhasil!'); window.location.href='about'; </script>";

        } else {
           
        echo"<script> alert('Error! Upload Gagal'); window.location.href='about'; </script>";
        
        }
  }

  public function edit_footer()
  {

                $data = array(
                 
                  'content' =>$this->input->post('content'),
                );  
     
                $id = $this->input->post('id');
                $where = "Footer About";

        $update = $this->M_setting->update_data($id, $data, $where);
        // var_dump($data);
        // die();     
        if($update)
          echo"<script> alert('Input Berhasil!'); window.location.href='footer'; </script>";
        else
           echo"<script> alert('Input Gagal!'); window.location.href='footer'; </script>";
  }

  public function editfooter()
  {

                $data = array(
                  
                  'content' =>$this->input->post('content'),
                );  
     
                $id = $this->input->post('id');
                $where = "Alamat";

        $update = $this->M_setting->update_data($id, $data, $where);
             
        if($update)
          echo"<script> alert('Input Berhasil!'); window.location.href='footer'; </script>";
        else
           echo"<script> alert('Input Gagal!'); window.location.href='footer'; </script>";
  }

}
