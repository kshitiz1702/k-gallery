<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/robototwo.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/kshitiz.css">
	<link rel="stylesheet" href="bootstrap/css/slideshow.css">
  <link rel="stylesheet" href="bootstrap/css/filter.css">
	<link rel="stylesheet" href="bootstrap/css/roboto.css">
	<script src="bootstrap\js\ajax.js"></script>
	<script src="bootstrap\js\bootstrap.min.js"></script>
	<script src="bootstrap\js\slideshow.js"></script>
  <script src="bootstrap\js\filter.js"></script>
	<script src="bootstrap\js\ajaxtwo.js"></script>
    <script>$('#exampleModalCenter').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>
<style type="text/css">
    .bs-example{
        margin:0px;
    }
img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 2px;
  width: 900px;
}
    
  </style>

<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <a href="#" class="navbar-brand" style="color:#00FF00; font-size: 20px">K GALLERY</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <image src="logo.jpg" style="width:68px; align-content: center; ">


        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active" style="color:white; font-size: 20px">Home</a>
                <a href="#" class="nav-item nav-link" style="color:white; font-size: 20px">About</a>
                <a href="#" class="nav-item nav-link" style="color:white; font-size: 20px">Contact</a>
            </div>
          
            <div class="navbar-nav">
                <!-- Button trigger modal -->
<a  style="color:#00FF00; font-size: 20px" class="nav-link" href="" data-toggle="modal" data-target="#exampleModalCenter">
  Sign Up
</a>
<!-- Modal -->
<form method="POST" action="signup.php">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: black; font-weight: bold;">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<tr>
      		<td>Name</td>
      		<td><input type="text" name="name" placeholder="enter your name" required ></td>
      	</tr>

      	<tr>
      		<td>Mobile No</td>
      		<td><input type="text" name="phn" placeholder="enter your mob no." required></td>
      	</tr>

      	<tr>
      		<td>Email</td>
      		<td><input type="text" name="email" placeholder="enter your email" required></td>
      	</tr>

      	<tr>
      		<td>Password</td>
      		<td><input type="password" name="password" placeholder="set your secure password" required></td>
      	</tr>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black;"><strong>Close</strong></button>
        <button type="submit" class="btn btn-primary" name="signup" style="color: black;"><strong>Sign Up</strong></button>
      </div>
    </div>
  </div>
</div>
</form>
                 <!-- Button trigger modal -->

                 <form method="POST" action="login.php">
<a style="color:#00FF00; font-size: 20px"  class="nav-link" href="" data-toggle="modal" data-target="#exampleModalCenter1">
  Login
</a>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: black; font-weight: bold;">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <tr>
        	<td>Email</td>
        	<td><input type="text" name="email" placeholder="ENTER YOUR EMAIL"></td>
        </tr>

        <tr>
        	<td>Password</td>
        	<td><input type="password" name="password" placeholder="ENTER YOUR PASSWORD"></td>
        </tr>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black; font-weight: bold;">Close</button>
        <button type="submit" class="btn btn-primary" name="login" style="color: black; font-weight: bold;">LOGIN</button>
      </div>
    </div>
  </div>
</div>
</form>
            </div>
            
        </div>
    </nav>
</div>


</head>

