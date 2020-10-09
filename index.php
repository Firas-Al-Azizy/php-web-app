 <?php
        session_start();
        require 'header.php';
        require 'nav.php';
?>
        <div class="main-w3layouts wrapper" >
            <h1>
        <?php
        
        if(isset($_SESSION['ID'])){
            $username = $_SESSION['USERNAME'];
            echo "hello $username <a href=\"includes/logut.inc.php\">logout</a>";

        }else {
            header('Location: login.php?status=waiting-for-login');
        }echo 'boo';
        ?>
        </h1>
        </div>
        
<?php 
require 'footer.php';
?>
      