<?php
session_start();

if(isset($_POST["btnviewcomment"]))
{
    $_SESSION['PID']=$_POST["btn-vcomments"];
    
}


include('dbconn.php');

include('header.php');





?>

<div class="container">

    <div class="row">
    
        <div class="col-3 text-center">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <textarea name="ucomment" class="form-control" placeholder="your comment"></textarea>
                
                <button name="confirmcomment" type="submit" class="btn btn-primary">Add Comment</button>
            
            
            </form>
            
        
        </div>
    </div>







        <?php
    
    $pid = $_SESSION['PID'];
    $q="select * from comments where p_id=$pid";
    $result=mysqli_query($conn,$q);
                  
                  
                  while($row = mysqli_fetch_row($result))
                  {
                      echo '<p>'.$row[1].'</p>';
                  }
    
    
    ?>
        
    </div>


</div>


<?php

include "footer.php";
            
                  
                  
 
                  
     if(isset($_POST['confirmcomment'])) 
     {
         $ucomment = $_POST['ucomment'];
         
           $ProductId =$_SESSION['PID'];
           
         $q="insert into comments (comment,p_id) values ('$ucomment','$ProductId')";
         
        mysqli_query($conn,$q);
         
         
     }
                  
                  
            


?>

