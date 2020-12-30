<!DOCTYPE html>
<html lang="en">
<head>
<title>Photos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="DBMS Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
    <link rel="stylesheet" href="css/main.css"/>
    
    <link rel="stylesheet" type="text/css" href="styles/photoscss.css">
    
<link rel="stylesheet" href="netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		

		

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">Travel Made Easy</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<?php
								$my_User = $_GET['getUsername'];
							?>
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php?getUsername=<?php echo $my_User; ?>">Home</a></li>
								
								<li class="main_nav_item"><a href="#contacts">Contact</a></li>
							</ul>
						</div>
						
						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>

	

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/trecking.jfif"></div>
			
            
        
           <!-- Container for the image gallery -->
 	<!-- Body Content -->
        <div class="content" style="left: 30px;">
			<div class="section-title">
				<h2 style="font-size: 70px;">Recommended <span>Trips...</span> </h2>
			</div>
    <!-- Gallery Content -->   
            <div class="gallery">
              <img src="images/trecking.jfif" alt="image not found" />
	
             <div class="desc" style="color: white;">
              <b><span>Trecking</span></b> </div> </div> 
            <div class="gallery">
              <img src="images/hills.jfif" alt="image not found" />
            
           
             <div class="desc" style="color: white;">
				<b><span>Hills</span></b>
            
            </div>  </div> 
            <div class="gallery" >
              <img src="images/temple.jfif" alt="image not found" />
            
            
             <div class="desc" style="color: white;">
				<b><span>Temple</span></b>
            
            </div> </div> 
             <div class="gallery">
              <img src="images/beach.jfif" alt="image not found" />
            
            
             <div class="desc" style="color: white;">
				<b><span>Beach</span></b>
            
            </div> </div> 
            <div class="gallery">
              <img src="images/adventure.jfif" alt="image not found" />
            
            
             <div class="desc" style="color: white;">
				<b><span>Adventure</span></b>
            
            </div> </div> 
           
         
     <!-- End of Gallery Content -->       
        </div>
        
        
        
	</div>
    
    
    
    


    
   
    
    <!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column 1-->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">Travel Made Easy</a></div>
							</div>
							<p class="footer_about_text">Travel makes one modest, you see what a tiny place you occupy in the world. One's destination is never a place,but a new way of seeing things.</p>
							
						</div>
					</div>
				</div>

				<!-- Footer Column 2-->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">Photos</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href=https://www.youtube.com/watch?v=99re33iIt7s>Travel with us this year</a></div>
									
								</div>
							</div>
							
							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title" ><a href="https://www.youtube.com/watch?v=wJF5NXygL4k"> destinations for you</a></div>
									
								</div>
							</div>

							<!-- Footer blog item -->
							<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href=https://www.youtube.com/watch?v=9ioTA6cflCM>Travel with us this year</a></div>
									
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column 3-->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">tours</a></li>
								<li class="tag_item"><a href="#">video</a></li>
								<li class="tag_item"><a href="#">party</a></li>
								<li class="tag_item"><a href="#">photography</a></li>
								<li class="tag_item"><a href="#">adventure</a></li>
								<li class="tag_item"><a href="#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column 4-->
				<div class="col-lg-3 footer_column">
					<div class="footer_col">
                        <a id="contacts"></a>
						<div class="footer_title">Contact Info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">Roshanya</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">+91 987654321</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="#">www.travelmadeeasy.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a target="_blank">Travel Made Easy</a>
</div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="main_nav_item"><a href="#">Home</a></li>
								<li class="main_nav_item"><a href="#contacts">Contact</a></li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
    



<script src="ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/photo-gallery.js"></script>
<script src="netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog_custom.js"></script>

</body>

</html>