<?php

require '/dbh.inc.php';

if(isset($_POST['submit'])){

    
    $filename = $_FILES['picture']['name'];
    $filetmp = $_FILES['picture']['tmp_name'];
    $folder = "images/";
    $ext = explode('.', $filename);
    $aext = strtolower(end($ext));
    $allowed = array('jpg' , 'jpeg' , 'png');
   if(in_array($ext[1] , $allowed)){
          
    try{
        move_uploaded_file($filetmp , $folder.$filename);

    }catch(Exception $ex){
        echo $ex;
    }
    $id = $_COOKIE['id'];
    $name= mysqli_real_escape_string($mysqli , $filename);
    $query = "update users set pic = \"$name\" where uid = $id";
    if($mysqli->connect_error){
        die("Connection failed: " . $mysqli->connect_error);

    }
    if($mysqli->query($query) === TRUE){
        echo "Record updated successfully";
        header("Location: ../profile.php?profile-updated=success");
        exit();

    }else{
        header("Location: ../profile.php?profile-updated=failure");
        exit();
      
    }}else{
        header('Location: ../profile.php?error=ftype-not-allowed');
    }
   
       
 

}
        
    

