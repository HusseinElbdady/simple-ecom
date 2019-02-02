<?php
include("./header.php");

session_start();

if(!isset($_SESSION["hussein"]))
{
	header("location:login.php");
}

?>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">add Product</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	
<div class="container text-center text-primary my-5">
  	<form method="post" action="addproduct.php" class="form-group" enctype="multipart/form-data" >

  		<label>product name</label>
  		<input class="form-control" type="text" name="pname">
  		
  		<label>product description</label>
  		<input class="form-control" type="text" name="pdec">
  		
  		<label>product salary</label>
  		<input class="form-control" type="text" name="psal">	

  		<label>product image</label>
  		<input class="form-control" type="file" name="pimage">

  		<button class="btn btn-primary" name="pbutton">add product</button>



  	</form>

</div>








  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
<?php
include("./footer.php");

?>