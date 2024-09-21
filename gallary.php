<?php
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.jpg" type="">

  <title> Parag Sir's Ideal Classes </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
  
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
	
	<style>
	
	</style>

</head>

<body class="sub_page">

<!----------------------------------------------------------- Header Section -------------------------------------------------------------------------------->

<?php
    include_once('header.php')
?>


  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Gallery <i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Gallery</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="gallary_page">
    <div class="main">
      <div class="top_banner">
        <div class="content_title">
          <h1 class="title">
            <small class="d-block"></small>
          </h1>
        </div>
      </div> 
    </section> 
	
		<section id="Gallary">
		<div class="container">
		<div class="row"> 
		
			<div class="col-md-4">
				<img src="images/gallery/g-1.png" alt=""><br><br>
				<img src="images/gallery/g-2.jpg" alt=""><br><br>
				<img src="images/gallery/g-3.png" alt=""><br><br>
				<img src="images/gallery/g-4.jpg" alt=""><br><br>
			</div>
			
			<div class="col-md-4">
				<img src="images/gallery/g-5.jpg" alt=""><br><br>
				<img src="images/gallery/g-6.png" alt=""><br><br>
				<img src="images/gallery/g-7.jpg" alt=""><br><br>
				<img src="images/gallery/g-8.png" alt=""><br><br>
				
			</div> 
			
			<div class="col-md-4">
				<img src="images/gallery/g-9.jpg" alt=""><br><br>
				<img src="images/gallery/g-10.jpg" alt=""><br><br>
				<img src="images/gallery/g-11.jpg" alt=""><br><br>
				<img src="images/gallery/g-12.png" alt=""><br><br>
			</div> 
		</div>
		</div>
	</section>

<br><br>
  
<!----------------------------------------------------------- Footer Section -------------------------------------------------------------------------------->

<?php
    include_once('footer.php')
?>
	
	<!------------------------------------------------------------------- Floatig contact Section & POPUP ------------------------------------------------------------------->

	<div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=+91 9623146353&text=Hello,%20I%20found%20you%20on%20google.%20I%20would%20like%20to%20get%20more%20information%20about%20Ideal%20Classes." class="floating" target="_blank">
		  <i class="fa fa-whatsapp fab-icon"></i>
		 </a>
	</div>
	<div class="call_float">
		<a href="tel:9623146353" class="floating" target="_blank">
			<i class="fa fa-phone fab-icon"></i>
		</a>
	</div>
	
    <div class="popup">
		<button id="close">&times;</button>
		<img src="images/popup.jpg" alt="..."  >
	</div>

  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>

<?php
?>