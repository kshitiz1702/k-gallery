<?php
include 'check_session.php';
$user_name=ucwords($_SESSION['name']);

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/robototwo.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/kshitiz.css">
	<link rel="stylesheet" href="bootstrap/css/slideshow.css">
	<link rel="stylesheet" href="bootstrap/css/roboto.css">
  <script src="bootstrap\js\ajax.js"></script>
	<script src="bootstrap\js\bootstrap.min.js"></script>
	<script src="bootstrap\js\slideshow.js"></script>
	<script src="bootstrap\js\ajaxtwo.js"></script>
    <script>$('#exampleModalCenter').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
<style type="text/css">
    .bs-example{
        margin:0px;
    }</style>

<!---gallery-->

<style>
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;
  width: 900px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.containerone {
  position: relative;
  text-align: center;
  color: white;
}

.top-left {
 position: absolute;
  top: 20%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.centered {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
}



</style>
<style>
.contain {
  position: relative;
  width: 100%;
  max-width: 500px;
  margin: 15px;
}

.contain img {
  width: 100%;
  height: auto;
}

.contain .btn {
  position: absolute;
  top: 50%;
  left: 88%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.contain .btn:hover {
  background-color: black;
}



</style>



<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-dark" style="font-color:white;">
        <a href="#" class="navbar-brand" style="font-size: 20px; font-weight: bold;">K GALLERY</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <image src="logo.jpg" style="width:68px; align-content: center; ">

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="frontfirst.php" class="nav-item nav-link active" style="color:white; font-size: 20px;">Home</a>
                <a href="#" class="nav-item nav-link" style="color:white; font-size: 20px;" >About</a>
                <a href="#" class="nav-item nav-link" style="color:white; font-size: 20px;" >Contact</a>
            </div>
          
            <div class="navbar-nav">
               
                 <!-- Button trigger modal -->

<a style="color:#FF4500 ; font-size: 20px; font-weight: bold;"  class="nav-link" href="#">
  <?php echo $user_name;?>
</a>

<a style="color:#00FF00; font-size: 20px;"  class="nav-link" href="logout.php">
  Log Out
</a>


            </div>
            
        </div>
    </nav>
</div>


</head>