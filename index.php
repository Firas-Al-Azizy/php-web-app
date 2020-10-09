 <?php
<<<<<<< HEAD
    session_start();
    require '/header.php';
    require '/nav.php';
    ?>
 <div class="main-w3layouts wrapper">
     <h1>
         <?php

            if (isset($_SESSION['ID'])) {
                $username = $_SESSION['USERNAME'];
                echo "hello $username 
=======
        session_start();
        require 'header.php';
        require 'nav.php';
?>
        <div class="main-w3layouts wrapper" >
            <h1>
        <?php
        
        if(isset($_SESSION['ID'])){
            $username = $_SESSION['USERNAME'];
            echo "hello $username 
>>>>>>> d43ae1a25b7e64ec8af57921cd09d3ea0a70fb00
            <a href=\"includes/logut.inc.php\">logout</a>";
            } else {
                header('Location: login.php?status=waiting-for-login');
            }
            echo 'boo';
            ?>

        </div>
        

 <?php
    require 'footer.php';
?>
    