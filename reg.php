<?php

include('./header.php')
?>

<h1 class="text-center text-primary"> Register Form</h1>
<div class="container text-primary">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>User Name</label>
        <input type="text" name="uname" class="form-control">
        <label>Email</label>
        <input type="text" name="umail" class="form-control">
        <label>Password</label>
        <input type="text" name="upass" class="form-control">

        <button name="buttton-reg" type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>
<?php

include('./footer.php');

if (isset($_POST['buttton-reg']))
{
    $username = $_POST['uname'];
    $usermail = $_POST['umail'];
    $userpass = $_POST['upass'];

include('dbconn.php');

$q = "insert into route_test (name,email,password) values ('$username','$usermail','$userpass')";

mysqli_query($conn,$q);
}


?>