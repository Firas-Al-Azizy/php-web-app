<?php

require '/header.php';
require '/nav.php';

?>
<style>
    body{
        background: #121212;
        
    }
    .footer{
        background: #fafafa;
    }
</style>
 <div class="container rounded"style ="background:#f3f3f3">

<div class="row">

  <!-- Post Content Column -->
  <div class="col-lg-8">

    <!-- Title -->
    <h1 class="mt-4 " style="font-family:Roboto; text-align:left; font-weight:700; color:black; letter-spacing:normal">Post Title</h1>

    <!-- Author -->
    <p class="lead">
      by
      <a href="#">Start Bootstrap</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>Posted on January 1, 2019 at 12:00 PM</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

    <hr>

    <!-- Post Content -->
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>

    <blockquote class="blockquote">
      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in
        <cite title="Source Title">Source Title</cite>
      </footer>
    </blockquote>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

    <hr>
    <?php
        //TO-DO ADD THE PAGINATION FEATURE 
        //TUTORIAL https://www.myprogrammingtutorials.com/create-pagination-with-php-and-mysql.html
        $total_pages=0;
        $pageno=0;
        // if (isset($_GET['pageno'])) {
        //     $pageno = $_GET['pageno'];
        // } else {
        //     $pageno = 1;
        // }
        // $no_of_records_per_page = 10;
        // $offset = ($pageno-1) * $no_of_records_per_page;

        // $conn=mysqli_connect("localhost","hussein","hussein","babab");
        // // Check connection
        // if (mysqli_connect_errno()){
        //     echo "Failed to connect to MySQL: " . mysqli_connect_error();
        //     die();
        // }

        // $total_pages_sql = "SELECT COUNT(*) FROM table";
        // $result = mysqli_query($conn,$total_pages_sql);
        // $total_rows = mysqli_fetch_array($result)[0];
        // $total_pages = ceil($total_rows / $no_of_records_per_page);

        // $sql = "SELECT * FROM table LIMIT $offset, $no_of_records_per_page";
        // $res_data = mysqli_query($conn,$sql);
        // while($row = mysqli_fetch_array($res_data)){
        //     //here goes the data
        // }
        // mysqli_close($conn);
    ?> 
    <ul class="pagination card d-block  p-3 align-items-right">
        <li class="btn btn-primary"><a class="text-light"href="?pageno=1">First</a></li>
        <li class="btn btn-primary  <?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a class="text-light" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="btn btn-primary  <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a class="text-light" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li class="btn btn-primary"><a class="text-light" href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>

    <!-- Comments Form -->
    <div class="card my-4">
      <h5 class="card-header">
        Write a comment....

      </h5>
      <div class="card-body">
        <form>
          <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

    <!-- Single Comment -->
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        
        <?php
        /*****this get the comment using function in included/dhb.inc.php */
                require 'includes/dbh.inc.php';
                $res = getCommentes($mysqli , 1);
                while($row = $res->fetch_assoc()){
                    echo $row['content'];
                }

            ?>      </div>
    </div>

    <!-- Comment with nested comments -->
    <div class="media mb-4">
      <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
      <div class="media-body">
        <h5 class="mt-0">Commenter Name</h5>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

        <div class="media mt-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

        <div class="media mt-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Commenter Name</h5>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- Sidebar Widgets Column -->
  <!--TODO
    1.show profile of author
    2.add profile picture
  -->
  <div class="col-md-4">
    <div class="card">
      <a href="profile.php?profile=">profile</a>
    </div>
    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control non-round" placeholder="Search for...">
          <span class="input-group-append">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">Web Design</a>
              </li>
              <li>
                <a href="#">HTML</a>
              </li>
              <li>
                <a href="#">Freebies</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
              <li>
                <a href="#">JavaScript</a>
              </li>
              <li>
                <a href="#">CSS</a>
              </li>
              <li>
                <a href="#">Tutorials</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 footer">
<div class="container">
  <p class="m-0 text-center text-white">Copyright 2020; &copy; <span style="font-family: lobster , cursive;">FEEDIT </span> </p>
</div>
<!-- /.container -->
</footer>




