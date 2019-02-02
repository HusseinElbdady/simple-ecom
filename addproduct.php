<?php



session_start();
if(!isset($_SESSION['hussein']))
{
	header("location:login.php");
}else
{
    include('dbconn.php');
if(isset($_POST['pbutton']))
{
    $pname = $_POST['pname'];
    $pdec = $_POST['pdec'];
    $psal = $_POST['psal'];
    
    $pimagename = $_FILES['pimage']['name'];
    $pimagetype = $_FILES['pimage']['type'];
    $pimagecurrentpath = $_FILES['pimage']['tmp_name'];

    
    $accepted_types=["image/png","image/jpg","image/jpeg","image/gif"];


if (in_array($pimagetype , $accepted_types))
{
	$newimagepath = "uploads/".$pimagename;
	move_uploaded_file($pimagecurrentpath, $newimagepath);


//	$q = "insert into products (pron , prodesc , prosalary , img_path) values ('$pname' , '$pdec' , '$psal' , '$newimagepath') ";

	$quer= "INSERT INTO `products`(`pron`, `prodesc`, `prosalary`, `img_path`) VALUES ('$pname','$pdec','$psal','$newimagepath')";

	if(mysqli_query($conn , $quer))
	{
		header('location:admin.php');
	} else {
		mysqli_error();
	}
}


}

}







?>
