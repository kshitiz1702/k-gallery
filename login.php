<?php
session_start();
if(isset($_POST['login']))
{
	extract($_POST);
	include 'connection.php';
	$sel_data="select * from signup_table where email='$email' and password='$password'";
	$res=mysqli_query($con,$sel_data);
	if(mysqli_num_rows($res)>=1)
	{
		$row=mysqli_fetch_array($res);
		$_SESSION['login_status']=true;
		$_SESSION['user_id']=$row['user_id'];
		$_SESSION['name']=$row['name'];
		header('Location:frontfirst.php');
	}
	else
	{
		?>
		<script>
			alert('Email or Password is incorrect');
			window.location='frontpage.php';
		</script>
		<?php
	}
}
else
{
	header('location:frontpage.php');

}
?>