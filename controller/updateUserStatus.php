<?php

    include_once "../config/dbconnect.php";
   
    $user_id=$_POST['record'];
    //echo $user_id;
    $sql = "SELECT user_status from users where user_id='$user_id'"; 
    $result=$conn-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();

    
    if($row["user_status"]==0){
         $update = mysqli_query($conn,"UPDATE users SET user_status=1 where user_id='$user_id'");
    }
    else if($row["user_status"]==1){
         $update = mysqli_query($conn,"UPDATE users SET user_status=0 where user_id='$user_id'");
    }
    
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>