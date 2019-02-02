<?php

include('./header.php');
session_start();
?>

<h1 class="text-center text-primary"> Login Form</h1>
<div class="container text-primary">

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    	<label>User Name</label>
    	<input name="logname" type="text" class="form-control">
    	
    	<label>Password</label>
    	<input name="logpass" type="text" class="form-control">

		<button name="btnlog" class="btn btn-primary">Submit</button>

    </form>

</div>
<?php

include('./footer.php');

if(isset($_POST['btnlog']))
{
	$name = $_POST['logname'];
	$passwd = $_POST['logpass'];

	include('dbconn.php');

	$q = "select * from route_test where name = '$name' and password= '$passwd'";

	$res = mysqli_query($conn , $q);
	if (mysqli_num_rows($res)>0) {
		header("location:admin.php");
		$_SESSION['hussein']='hussein_session';
	}
	else{
	header("location:login.php");
	}

}