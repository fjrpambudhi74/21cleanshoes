<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      $this->load->view('header');
      foreach ($slider as $row) {
        $gambar = $row->gambar;
        $judul_slider = $row->judul_slider;
        $konten_slider = $row->konten_slider;
      }
    ?>
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="top-bar py-3 bg-light" id="home-section">
      <div class="container">
        <div class="row align-items-center">
         
          <div class="col-6 text-left">
            <ul class="social-media">
              <li><a href="#" class=""><span class="icon-facebook"></span></a></li>
              <li><a href="#" class=""><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com/21cleanshoes/?hl=id" class=""><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-6">
            <p class="mb-0 float-right">
              <span class="mr-3"><a href="tel://#"> <span class="icon-phone mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">(+62) 822-1047-9331 </span></a></span>
              <span><a href="#"><span class="icon-envelope mr-2" style="position: relative; top: 2px;"></span><span class="d-none d-lg-inline-block text-black">21cleanshoes@gmail.com</span></a></span>
            </p>
            
          </div>
        </div>
      </div> 
    </div>
    <!-- HEADER -->
    <header class="site-navbar py-4 bg-white js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h2 class="mb-0 site-logo">
               <img src="<?= base_url('assets');?>/images/newlogo.png" width="58px" alt="Image" class="img-fluid posisi-logo">

              <a href="index.html" class="text-black mb-0 posisi-nama">21cleanshoes<span class="text-primary"></span> </a></h2>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <?php $this->load->view('navbar');?>
          </div>
          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <!-- #HEADER -->
  
     <!-- SLIDER -->
    <div class="site-blocks-cover overlay" style="background-image: url(assets/img/slider/<?php echo $gambar; ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">

          <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                        
            <div class="row mb-4">
              <div class="col-md-7">
                <h1><?php echo $judul_slider ?></h1>
                <p class="mb-5 lead"><?php echo $konten_slider ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- #SLIDER -->

<!-- TAMPILAN OUR SERVICE --> 
    <div class="site-section bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Our Services</h3>
            <h2 class="section-title mb-3">We Offer Services</h2>
          </div>
        </div>

        <div class="row align-items-stretch">
            <?php
              foreach ($service as $row) { ?>
              <div class="col-lg-4 col-md-6" align="justify">
              <h3 style="color:black"><?php echo $row->judul; ?></h3>
              <p style="color:black"><?php echo $row->konten_service; ?></p>
              </div>
            <?php } ?>
            <div class="unit-4 d-flex">

              <!-- <div class="unit-4-icon mr-4"><span class="text-primary icon-pie_chart"></span></div> -->
              <div>
              
              </div>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>

     <!-- Product -->

    
    <div class="site-section" id="products-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="section-sub-title">Popular Products</h3>
            <h2 class="section-title mb-3">Our Products</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <figure>
                <img src="<?= base_url('assets');?>/images/pic3.jpg" alt="Image" class="img-fluid img-size">
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <figure>
                <img src="<?= base_url('assets');?>/images/pic1.jpg" alt="Image" class="img-fluid img-size">
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <figure>
                <img src="<?= base_url('assets');?>/images/pic2.jpg" alt="Image" class="img-fluid img-size">
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <figure>
                <img src="<?= base_url('assets');?>/images/pic7.jpg" alt="Image" class="img-fluid img-size">
              </figure>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <figure>
                <img src="<?= base_url('assets');?>/images/pic6.jpg" alt="Image" class="img-fluid img-size">
              </figure>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="product-item">
              <figure>
                <img src="<?= base_url('assets');?>/images/pic4.jpg" alt="Image" class="img-fluid img-size">
              </figure>
            </div>
          </div>

          
        </div>
      </div>
    </div>

    <!-- #SLIDER1 -->

    <div class="site-blocks-cover inner-page-cover overlay get-notification"  style="background-image: url(<?= base_url('assets');?>/images/imgnew2.jpg); background-attachment: fixed;" data-aos="fade">
      <div class="container">

        <div class="row align-items-center justify-content-center">
          <form class="col-md-7" method="post">
            <h2>Get notified on each updates.</h2>
            <div class="d-flex mb-4">
              <input type="text" class="form-control rounded-0" placeholder="Enter your email address">
              <input type="submit" class="btn btn-white btn-outline-white rounded-0" value="Subscribe">
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat commodi veniam doloremque ducimus tempora.</p>
          </form>
        </div>

      </div>
    </div>



    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-md-8 mb-5 mb-lg-0 position-relative">
            <img src="<?= base_url('assets');?>/images/pic5.jpg" width="500px" class="img-fluid" alt="Image">
          </div>

          <div class="col-md-3 ml-auto">
            <h3 class="section-sub-title">Merchant Company</h3>
            <h2 class="section-title mb-3">About Us</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui fuga ipsa, repellat blanditiis nihil, consectetur. Consequuntur eum inventore, rem maxime, nisi excepturi ipsam libero ratione adipisci alias eius vero vel!</p>
            <p><a href="#" class="btn btn-black btn-black--hover rounded-0">Learn More</a></p>
          
          </div>
        </div>
      </div>
    </div>
     
    <div class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">People Says</h3>
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="<?= base_url('assets');?>/images/person_3.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>John Smith</strong></p>

              
            </div>
          </div>
          <div>
            <div class="testimonial">
              
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="<?= base_url('assets');?>/images/person_2.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>

              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              
              <p class="text-black"><strong>Robert Aguilar</strong></p>
              
              
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="<?= base_url('assets');?>/images/person_4.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Roger Spears</strong></p>

              
            </div>
           
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4 d-block align-items-center justify-content-center">
                <div><img src="<?= base_url('assets');?>/images/person_1.jpg" alt="Image" class="w-100 img-fluid mb-3"></div>
              </figure>
              <blockquote class="mb-3">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <p class="text-black"><strong>Kyle McDonald</strong></p>

              
            </div>

          </div>

        </div>
    </div>
   
    <!-- ISI FORM -->
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row ">
          <div class="col-12 text-center">
            <h3 class="section-sub-title">Contact Form</h3>
            <h2 class="section-title mb-3">Get In Touch</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-form">
              
              <h2 class="h4 text-black mb-5">Contact Form</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-black rounded-0 py-3 px-4">
                </div>
              </div>

  
            </form>
          </div>
        
        </div>
        
      </div>
    </div>

    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5457384449255!2d106.91665301431749!3d-6.9447636699146535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684804a327efe3%3A0x1d1620d831779e37!2s21cleanshoes!5e0!3m2!1sid!2sid!4v1567096262666!5m2!1sid!2sid" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

      <!-- FOOTER -->
    <footer class="site-footer bg-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">We Are Open</h2>
                <p>Workshop :<br>
                Jl. Pelabuhan II No.332, Dayeuhluhur, Kec. Warudoyong, Kota Sukabumi, Jawa Barat 43134 <br>
                Monday - Sunday 08:00 – 19:00 (Everyday)
                Pick Up & Delivery Service Available</p>
              </div>
              <div class="col-md-4">
                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="https://www.instagram.com/21cleanshoes/?hl=id" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>

        </div>
      
      </div>
    </footer>

  </div>
  <?php
      $this->load->view('js');
    ?>
    <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>
  </body>
</html>