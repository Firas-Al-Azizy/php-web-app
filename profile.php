<?php          
session_start();
require 'header.php';
require 'nav.php';

?>

<style>

    .profile-image{
        display: block;
        margin-left:auto ;
        margin-right:auto ;
     

    }
    .btn{
        font-family: "Roboto Mono";
    }
</style>
 
<div class="container">
    <div class="row  mt-4 justify-content-center">
    <div class="col-sm-8 justify-content-center p-4 border border-dark rounded " style="background:#121212">

            <h1 class="mt-2">
              Your Profile

            </h1>
            
    
           <?php
                
                $id = $_COOKIE['id'];
                require 'includes/dbh.inc.php';
              
                $select = "select * from users where uid =$id";

                if($mysqli->connect_error){
                    die("Connection failed: " . $mysqli->connect_error);
            
                }
                $res = $mysqli->query($select);
                if($res->num_rows > 0){
                    while($row = $res->fetch_assoc()){
                    echo '<img class="rounded-circle profile-image mt-3" src="includes/images/'.$row['pic'].'"  alt="" width = "250px" height="250px">';
                    }
            
                }else{
                    echo ' <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/250x250" alt="">';
                }
            ?> 
            <form action="includes/addProfilePic.inc.php" method="post" class="form-inline mt-3 justify-content-center " enctype="multipart/form-data">
            <div class="form-group">
            
            <div class="form-group justify-content-center p-4">
            <div class="custom-file">
                 <input class="custom-file-input" type="file"  name="picture" id="customFile">
                 <label class="custom-file-label" for="customFile">Choose Picture</label>

                 </div>

            </div> 
            <button for = "customFile" class="btn btn-md btn-primary" type="submit" name="submit" disabled>UPDATE</button>

            </div>

            </form>
            
    </div>
  
</div>
</div>
<script>
      
        $('#customFile').on('change' , function (){

            console.log($(this).val());
            if($(this).val() !== null ){
                $('#update').removeClass('disabled');
                $('#update').removeAttr('disabled');
            }
                
        });
</script>
</body>
</html>
