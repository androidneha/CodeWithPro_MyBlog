<?php include 'config/config.php';?>
<?php include 'libraries/Database.php';?>
<?php
  $db=new Database();
  $id=$_GET['id'];
  $query = "SELECT * FROM post WHERE id = $id ";
  $posts=$db->select($query);
?>
 <?php include('include/header.php'); ?>


<?php if($posts) { ?>

<?php while($row= $posts->fetch_assoc()) : ?>

   <div class="container">
    <div class="blog-header">
      <h3 class="blog-title"><b><a href="index.php" style="text-decoration: none; color: #000"><?php echo $row['title']?></b> </h1>
    </div>
    <div class="row">

       <?php include('include/single_post.php'); ?>
       <?php include('include/sidebar.php') ;?>
    </div><!-- /.row -->
   </div>

   <?php endwhile ;?>
<?php } else { ?>
 
 <p> Nothing Found</p>

 <?php } ?>

   <?php include('include/footer.php') ;?>

