
<div class="col-sm-8 blog-main">
<p style="margin-top: 40px"> <?php echo $row['body']; ?></p>

<div class="row" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="col-md-3"><a href="DownloadProject/" class="btn btn-danger" download>Download Project </a></div>
	<div class="col-md-3"> <a href="apk/app-debug.apk" class="btn btn-danger" download>Download Apk File </a></div>
</div>
<iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo $row['video_url']?>?autoplay=0" style="height: 300px; width: 100%;">
</iframe>
<div class="row" style="margin-bottom: 20px">
	<div class="col-md-3"><img src="<?php echo $row['post_image']; ?>" style="height: 350px; width: 350px;"></div>

	<div class="col-md-3"></div>
</div>
    
</div><!-- /.blog-main -->