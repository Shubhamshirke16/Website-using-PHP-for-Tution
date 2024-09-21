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
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 120px;
  height: 120px;
  margin: -76px 0 0 -76px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
</head>

<body onload="myFunction()" style="margin:0;">

<?php
    include_once('header.php')
?>

<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">
<section class="layout_padding">
<div class="container">
  <div class="row">
    <div class=col-md-3>
    </div>
    <div class=col-md-6>
      <center>
      <h1 style="color:Black">Verification Status</h1><br>
      </center>

      <table id="myTable" class="table table-bordered table-striped">
      <?php

            $id=$_POST['vNum'];
            include_once('connection.php');
            $sql = "SELECT * FROM programmingStudent where srNo =$id";

            //use for MySQLi-OOP
            $query = $conn->query($sql);
            while($row = $query->fetch_assoc()){
            echo"
            <tr>
            <td>Certificate RegNo.</td>
            <td>".$row['srNo']."</td>
            </tr>
            <tr>
            <td>Student Name</td>
            <td>".$row['studName']."</td>
            </tr>
            <tr>
            <td>Course Name</td>
            <td>".$row['courseTitle']."</td>
            </tr>
            <tr>
            <td>Duration</td>
            <td>".$row['Duration']."</td>
            </tr>
            <tr>
            <td>Start Date</td>
            <td>".$row['startDate']."</td>
            </tr>
            <tr>
            <td>End Date</td>
            <td>".$row['endDate']."</td>
            </tr>
            </table>";
            $isss=$row['studName'];
            }

            if(isset($isss))
            {
?>
              <center>
              <h1 style="color:green">Verified</h1><br>
              <img src="images/check.gif" width=20% height=50%><br>
              </center>
              
<?php
            }
            else{
?>
              <div style="border-radius:20px; background-color:#eae1cd; padding:20px;">
              <center>
              <h1 style="color:red">Invalid Certificate Number</h1><br>
              <img src="images/wrong.gif" width=20% height=50%><br>
              </center>
              </div>
<?php
            }

?>
      </div>
      <div class=col-md-3>
      </div>
    </div>
  </div>
</section>
</div>
<!--Script-->
<script src="js/script.js"></script>
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


<script>
var myVar;
function myFunction() {
  myVar = setTimeout(showPage, 3000);
}
function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>

</body>
</html>