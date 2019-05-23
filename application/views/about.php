	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title> Personal</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?php echo base_url('css/linearicons.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.css')?>">				
			<link rel="stylesheet" href="<?php echo base_url('css/nice-select.css')?>">							
			<link rel="stylesheet" href="<?php echo base_url('css/animate.min.css')?>">
			<link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.css')?>">					
			<link rel="stylesheet" href="<?php echo base_url('css/main.css')?>">
		</head>
		<body>	

		<? php $this->load->view('page/about') ?>
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div >
			      	<h1 class="mb-10">Perpustakaan </h1>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="<?php echo site_url('Welcome');?>">Home</a></li>
			          <li><a href="<?php echo site_url('about');?>">Daftar</a></li>
			          <li><a href="<?php echo site_url('pinjam');?>">Pinjam Buku</a></li>
			          <li><a href="<?php echo site_url('databuku');?>">Data Buku</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			  
			<!-- start banner Area -->
	
			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="<?php echo base_url('img/perpus.jpg')?>" alt="">
						</div>
						<div class="">
<table align="center"  >

<?php echo form_open('about/submit_register');?>
       			<tr>
                  <td><label for="nama" class="labelfrm" >nama &nbsp;</label></td><td> : &nbsp; </td>
                  <td><input type="text" name="nama" id="nama" size="30" class="required"/></td>
				</tr>
                <br>
               
                <tr>
				<td><label for="jenkel" class="labelfrm">Jenis Kelamin &nbsp;</label></td><td>: &nbsp;</td>
				<td>
					<input type="radio" name="jk" value="pria" checked>Pria &nbsp;
					<input type="radio" name="jk" value="wanita" checked>Wanita
                 </td>
				</tr>
                 <tr>
                <td><label for="kota" class="labelfrm">Jurusan &nbsp;</label></td><td>: &nbsp;</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Kota</option>
						<option value="Informatika">Informatika</option>
						<option value="Manajemen">Manajemen</option>
						<option value="Komunikasi">Komunikasi</option>
						<option value="Akuntansi">Akuntansi</option>
					</select>
				</td>
				</tr>
				<tr>
                  <td><label for="alamat" class="labelfrm" >Alamat &nbsp;</label></td><td> : &nbsp;</td>
                  <td><input type="text" name="alamat" id="alamat" size="30" class="required"/></td>
				</tr>
				<tr>
                  <td><label for="no_hp" class="labelfrm" >No HP &nbsp;</label></td><td> : &nbsp;</td>
                  <td><input type="text" name="no_hp" id="no_hp" size="30" class="required"/></td>
				</tr>
                <br>
				<tr>
                  <td><label for="password" class="labelfrm">Password &nbsp;</label> </td><td> : &nbsp; </td>
                  <td><input type="password" name="password" id="password" size="30" class="required"/></td>
				</tr>
                <tr>
                <td colspan="3" align="center">
                <button type="submit" name="input" value="simpan" id="simpan"  class="btn btn-custom theme_background_color">Daftar</button>
     	   &nbsp;
     	   &nbsp;
     	 		  <a href="index.html" class="btn btn-custom theme_background_color">Batal</a>
           </td>
           </tr>

       <?php echo form_close();?>
       </table>
</div>
					





				
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->	







            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>
                                    We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                                </p>
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Stay updated with our latest trends</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="jurusan" placeholder="Enter jurusan Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter jurusan Address '" required="" type="jurusan">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="<?php echo base_url('js/vendor/jquery-2.2.4.min.js') ?>"></script>
			<script src="<?php echo base_url('js/popper.min.js') ?>"></script>
			<script src="<?php echo base_url('js/vendor/bootstrap.min.js') ?>"></script>			
			<script src="<?php echo base_url('https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA') ?>"></script>			
  			<script src="<?php echo base_url('js/easing.min.js')?>"></script>			
			<script src="<?php echo base_url('js/hoverIntent.js')?>"></script>
			<script src="<?php echo base_url('js/superfish.min.js')?>"></script>	
			<script src="<?php echo base_url('js/jquery.ajaxchimp.min.js')?>"></script>
			<script src="<?php echo base_url('js/jquery.magnific-popup.min.js')?>"></script>	
    		<script src="<?php echo base_url('js/jquery.tabs.min.js')?>"></script>						
			<script src="<?php echo base_url('js/jquery.nice-select.min.js')?>"></script>	
            <script src="<?php echo base_url('js/isotope.pkgd.min.js')?>"></script>			
			<script src="<?php echo base_url('js/waypoints.min.js')?>"></script>
			<script src="<?php echo base_url('js/jquery.counterup.min.js')?>"></script>
			<script src="<?php echo base_url('js/simple-skillbar.js')?>"></script>							
			<script src="<?php echo base_url('js/owl.carousel.min.js')?>"></script>							
			<script src="<?php echo base_url('js/mail-script.js')?>"></script>	
			<script src="<?php echo base_url('js/main.js')?>"></script>


		</body>
	</html>