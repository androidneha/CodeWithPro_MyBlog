<?php include 'config/config.php';?>
<?php include 'libraries/Database.php';?>
<?php
  $db=new Database();

  $query="SELECT * FROM post";
  $posts=$db->select($query);
?>
<?php include('include/header.php'); ?>

<div class="container">
<div class="blog-header">
<h1 class="blog-title"><b>LATEST</b> </h1>
</div>
<div class="row">
<?php include('include/recent.php') ;?>
<?php include('include/sidebar.php') ;?>
</div><!-- /.row -->
</div><!-- /.container -->
<?php include('include/footer.php') ;?>

