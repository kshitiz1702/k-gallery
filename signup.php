<?php
if(isset($_POST['signup']))
{
	include 'connection.php';
	extract($_POST);
	$user_id=rand(1000000,9999999);
	$status=true;
	while($status)
	{
		$ch_ur="select * from signup_table where user_id='$user_id'";
		$res=mysqli_query($con,$ch_ur);
		if(mysqli_num_rows($res)>=1) {
			$user_id=rand(1000000,9999999);
		}
		else
		{
			$status=false;
		}
	}
	$sel_que="select * from signup_table where phn='$phn' or email='$email'";
	$res=mysqli_query($con,$sel_que);


	if(mysqli_num_rows($res)>=1)
	
	{
		?>
	<script>
		alert('number or email is already registered');
		window.location="frontpage.php";
	</script>
<?php
	}
	else
	{
		echo $ins_que="insert into signup_table(user_id,name,phn,email,password) values('$user_id','$name','$phn','$email','$password')";
	mysqli_query($con,$ins_que);
	?>
	<script>
		alert('THANK U FOR SIGN UP');
	    window.location="frontfirst.php";
	</script>
	<?php

	}
}
	else
{	
}
	
?>