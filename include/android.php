<div class="col-sm-8 blog-main">

<?php if($posts) { ?>

<?php while($row= $posts->fetch_assoc()) : ?>

  <div class="blog-post">
    <div class="blog_img"><img src="<?php echo $row['thumbnail']; ?>"></div>
    <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
    <p class="blog-post-meta"><?php echo $row['date'];?> by <a href="#"><?php echo $row['author'];?></a><b>/</b><span><?php echo $row['comment'];?> Comments</span></p>
    <p class="blog-data"><?php echo $row['body'];?></p>
    <div class="read_more"><a href="post.php?id=<?php echo $row['id'];?>">Read More</a></div>
  </div>

<?php endwhile ;?>
<?php } else { ?>
 
 <p> No Post Yet </p>

 <?php } ?>
  <nav>
    <ul class="pager">
      <li><a href="#">Previous</a></li>
      <li><a href="#">Next</a></li>
    </ul>
  </nav>
</div><!-- /.blog-main -->