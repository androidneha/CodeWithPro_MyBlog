<?php include 'config/config.php';?>
<?php include 'libraries/Database.php';?>
<?php
  $db=new Database();
?>
<?php include('include/header.php'); ?>
<div class="container">
<div class="row">
<div class="col-md-8">
   <?php include('include/home_carousel.php') ;?>
     <div class="popular_tutorials">
      <h4>Our Popular Tutorials</h4>
      <ol class="list_of_tutorials">
        <li><a href="#">Android SQLite Database Tutorial - 1,693,077 views</a></li>
        <li><a href="#">How to connect Android with PHP, MySQL - 1,648,132 views</a></li>
        <li><a href="#">Android JSON Parsing Tutorial - 1,557,653 views</a></li>
        <li><a href="#">Android Push Notifications using Firebase Cloud Messaging FCM & PHP - 1,483,834 views</a></li>
        <li><a href="#">Android Sliding Menu using Navigation Drawer - 1,415,380 views</a></li>
        <li><a href="#">Android Login and Registration with PHP, MySQL and SQLite - 1,256,535 views</a></li>
        <li><a href="#">Android Custom ListView with Image and Text - 1,109,845 views</a></li>
      </ol>
    </div>

    <div>
      <?php
      show_source("hire_me.php");
     
      ?>
    </div>
</div>
<?php include('include/sidebar.php') ;?>
</div><!-- /.row -->
</div><!-- /.container -->
<?php include('include/footer.php') ;?>


