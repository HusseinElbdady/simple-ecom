<?php
include("./header.php");


include('./dbconn.php');

$query = "select * from products";

$result = mysqli_query($conn , $query);


echo '<div class="container">

    <div class="row">';


while ($rows = mysqli_fetch_assoc($result))
{
  echo '


<div class="col-4">
                
                    <div class="item">
                    <div class="card text-center" style="width: 18rem;">
  <img src="'.$rows['img_path'].'" class="card-img-top" width="200" height="200" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$rows['pron'].'</h5>
    <p class="card-text">'.$rows['prodesc'].'</p>
    
    <span class="text-success">'.$rows['prosalary'].'</span>
    <br>
 
    <form action="comments.php" method = "post">
              <button value='.$rows['id'].'name="btn-vcomments" class="btn btn-primary">Prouduct comments</button>
            </form>
    
  </div>
</div>          
                    
                    </div>
                
                
                
                
                </div>';
      
      

};

echo '</div> </div>';

include("./footer.php");
?>
