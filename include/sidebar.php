<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
<p style="color: #000;">We Support Clean India</p>
 <div class="sidebar-module sidebar-module-inset">
   <img src="images/add_1.png">
 </div>

 <div class="sidebar-module sidebar-module-inset">
   <img src="images/add_2.jpg">
 </div>

 <div class="sidebar-module sidebar-module-inset">
  <h4>About</h4>
  <p>Hi I am Neha Sharma working as an Android Developer. </p>
  <b>Follow us On</b><br>
  <a class="btn btn-social-icon btn-github" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-github']);"><span class="fa fa-github"></span></a>
  <a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><span class="fa fa-instagram"></span></a>
  <a class="btn btn-social-icon btn-linkedin" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-linkedin']);"><span class="fa fa-linkedin"></span></a>
  <a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
  <a class="btn btn-social-icon btn-yahoo" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-yahoo']);"><span class="fa fa-yahoo"></span></a>
</div>
<div class="sidebar-module">
  <h4>Category</h4>
  <ol class="list-unstyled">
    <?php
      $query="SELECT * FROM category";
      $posts=$db->select($query);
      if($posts) { ?>
      <?php while($row= $posts->fetch_assoc()) : ?>
      <li><a href="#"><?php echo $row['category_name']?> Tutorial</a></li>
      <?php endwhile ;?>
      <?php } else { ?>      
       <li><a href="#"> No Category Found </a></li>
       <?php } ?>
  </ol>
</div>
</div><!-- /.blog-sidebar -->