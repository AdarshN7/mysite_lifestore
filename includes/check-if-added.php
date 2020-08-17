
<?php
function check_if_added_to_cart($item_id)
{ require 'common.php';
    $con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));

  $user_id= $_SESSION['id'];
  $sql="SELECT * FROM users_item WHERE item_id = '$item_id' AND user_id= '$user_id' AND status='Added to cart'";
  $result= mysqli_query($con , $sql) ;
  if(mysqli_num_rows($result)>=1)
        { return TRUE;}
  else
      {return FALSE;}

}
?>