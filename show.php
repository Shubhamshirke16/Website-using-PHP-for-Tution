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

</head>

<body class="sub_page">

<!----------------------------------------------------------- Header Section -------------------------------------------------------------------------------->

<?php
    include_once('header.php')
?>

  <!----------------------------------------------------------- Page-header section  -------------------------------------------------------------------------------->

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Feedback<i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-0 bread">Feedback</h1>
        </div>
      </div>
    </div>
  </section>


      <!----------------------------------------------------------- About class section  -------------------------------------------------------------------------------->
   
   <br>
   <br>   <h2 align=center>Visiter Feedback</h2>
      <br><br>
    <div class="show">
		<div class="container">
        <div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Contact</th>
						<th>Email</th>
                        <th>Message</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM visiter";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
                                    <td>".$row['id']."</td>
									<td>".$row['name']."</td>
									<td>".$row['contact']."</td>
									<td>".$row['email']."</td>
									<td>".$row['message']."</td>
								</tr>";
							}
							
						?>
					</tbody>
				</table>
			</div>
        </div>
    </div>
      
			
  



<!------------------------------------------------------------------- Footer Section ------------------------------------------------------------------->

<?php
    include_once('footer.php')
?>
	
	<!------------------------------------------------------------------- Floatig contact Section & POPUP ------------------------------------------------------------------->

	<div class="whatsapp">
		<a href="https://api.whatsapp.com/send?phone=+91 9623146353&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="floating" target="_blank">
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
		<img src="images/popup.jpg" alt="..." width="100%">
    
	</div>

  <!----------------------------------------------------------- Java script Imported -------------------------------------------------------------------------------->

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

</body>

</html>
<?php
?>