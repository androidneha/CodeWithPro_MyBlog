<!DOCTYPE html>
<html lang="en">
<head>
 <?php include('include/head.php');?>
</head>
<body>
  <marquee style="margin-top: 5px; margin-bottom: 5px; margin-left: 120px;margin-right: 120px;">Latest Updates By Android  | Latest Updates By Android | Latest Updates By Android |  Latest Updates By Android  | Latest Updates By Android  | Latest Updates By Android |  Latest Updates By Android  | Latest Updates By Android  | Latest Updates By Android  | Latest Updates By Android |  Latest Updates By Android |  Latest Updates By Android  | Latest Updates By Android |  Latest Updates By Android </marquee>
  <nav class="navbar navbar-inverse navbar-fixed">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand" style="margin-right: 50px;"><span style="color: white; font-size: 25px">C</span>ode<span style="color: white; font-size: 25px">W</span>ith<span style="color: white; font-size: 25px">P</span>ro</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="recent"><a href="recent.php">Recent Post</a></li>
        <li class="android"><a href="android.php">Android</a></li>
        <li class="php"><a href="PHP.php">PHP</a></li>
        <li class="tips"><a href="PHP.php">Tips</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="hire_me.php" style="color: #32DF0F">Hire Me</a></li>
        
        <!-- Login Link And LogIn Form -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
          <ul id="login-dp" class="dropdown-menu">
            <li>
             <div class="row">
              <div class="col-md-12">
                Login via
                <div class="social-buttons">
                  <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                  <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                </div>
                or
                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                  <div class="form-group">
                   <label class="sr-only" for="exampleInputEmail2">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                 </div>
                 <div class="form-group">
                   <label class="sr-only" for="exampleInputPassword2">Password</label>
                   <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                   <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                 </div>
                 <div class="form-group">
                   <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                 </div>
                 <div class="checkbox">
                   <label>
                     <input type="checkbox"> keep me logged-in
                   </label>
                 </div>
               </form>
             </div>
             <div class="bottom text-center">
              New here ? <a href="#"><b>Join Us</b></a>
            </div>
          </div>
        </li>

        <!-- Login Link And LogIn Form -->
      </ul>
    </div>
  </nav>