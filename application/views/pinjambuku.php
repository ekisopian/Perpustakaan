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

		
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/perpus.jpg" alt="" title="" /></a>
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
			  
		

<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Pinjam Buku</h1>
								
							</div>
						</div>
					</div>					
					<div class="row">
				
<table align="center"  >	

<?php echo form_open('pinjam/submit_pinjam');?>
       			<tr>
                  <td><label for="id_anggota" class="labelfrm" >nama &nbsp;</label></td><td> : &nbsp; </td>
                  <td><input type="text" name="id_anggota" id="id_anggota" size="30" class="required"/></td>
				</tr>
                <br>
               
                <tr>
				<td><label for="kode_buku" class="labelfrm">Kode Buku &nbsp;</label></td><td>: &nbsp;</td>
				<td>

	<input type="text" name="kode_buku" id="kode_buku" size="30" class="required"/>


                 </td>
				</tr>
                 <br>
				<tr>
                  <td><label for="tgl_pinjam" class="labelfrm" >Tanggal Pinjam &nbsp;</label></td><td> : &nbsp;</td>
                  <td><input type="text" name="tgl_pinjam" id="tgl_pinjam" size="30" class="required"/></td>
				</tr>
				<br>
				<tr>
                  <td><label for="tgl_kembai" class="labelfrm" >Tanggal Kembali &nbsp;</label></td><td> : &nbsp;</td>
                  <td><input type="text" name="tgl_kembai" id="tgl_kembai" size="30" class="required"/></td>
				</tr>
                <br>
				
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
			<!-- start banner Area -->
	
			<!-- Start home-about Area -->
		
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
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
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