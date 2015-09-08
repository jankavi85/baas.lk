<?php include 'components/authentication.php' ?>     
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>baas.lk</title>

<link href="main.css" rel="stylesheet">

<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="loginBox.css" rel="stylesheet">
<style type="text/css">


<style>

#apDiv7 {
	position:absolute;
	left:337px;
	top:519px;
	width:553px;
	height:177px;
	z-index:8;
}
#apDiv7 {
	position: absolute;
	left: 0px;
	top: 118px;
	width: 100%;
	height: 205px;
	z-index: 8;
	background-color: rgba(0,0,0,0.5);
}
#apDiv8 {
	position: absolute;
	left: 112px;
	top: 171px;
	width: 543px;
	height: 85px;
	z-index: 9;
}
#apDiv9 {
	position: absolute;
	left: 116px;
	top: 100px;
	width: 500px;
	height: 85px;
	z-index: 9;
}
#apDiv10 {
	position: absolute;
	left: 476px;
	top: 102px;
	width: 100%;
	height: 535px;
	z-index: 5;
}
#apDiv11 {
	position: absolute;
	left: auto;
	top: 60px;
	width: 140px;
	height: 535px;
	z-index: 9;
	right: 0px;
	background-color: rgba(0,0,0,0.8);
}

.btn {
  background: #d3d934;
  background-image: -webkit-linear-gradient(top, #d3d934, #857929);
  background-image: -moz-linear-gradient(top, #d3d934, #857929);
  background-image: -ms-linear-gradient(top, #d3d934, #857929);
  background-image: -o-linear-gradient(top, #d3d934, #857929);
  background-image: linear-gradient(to bottom, #d3d934, #857929);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

#apDiv12 {
	position: absolute;
	left: auto;
	top: 60px;
	width: 135px;
	height: 548px;
	z-index: 5;
	background-color: rgba(0,0,0,0.5);
	right: 0px;
}
.fbPic {
	position: absolute;
	width: 264px;
	height: 50px;
	left: 113px;
	top: 254px;
}
.fbButton {
	background-image: url(fbButton.png);
	position: absolute;
	width: 299px;
	top: 259px;
	height: 42px;
	background-repeat: no-repeat;
	left: 80px;
}
.RoundButton {
	background-color: rgba(0,204,153,0.4);
	position: absolute;
	left: 956px;
	top: 87px;
	width: 103px;
	height: 101px;
	border-radius: 50px;
}
#apDiv13 {
	position: absolute;
	left: 273px;
	top: 391px;
	width: 100px;
	height: 100px;
	z-index: 9;
	border-radius: 50;
}

#signup {
	position: absolute;
	left: 1024px;
	top: 10px;
	width: 100px;
	height: 20px;
	z-index: 9;
	border-radius: 50;
}

#login {
	position: absolute;
	left: 1200px;
	top: 10px;
	width: 100px;
	height: 20px;
	z-index: 9;
	border-radius: 50;
}



</style>






<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>

</head>

<body>


<div id="apDiv1"> 

<img src="Untitled-1.png" width="210" height="94" alt="baas logo">
</div>

<div id="apDiv2">
  <p><em><strong>The best way to find a builder</strong></em></p>
   
</div>


<div id="apDiv3">
<ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a href="index.html">HOME</a></li>
  <li><a href="profile.html">PROFILE</a></li>
<li><a href="wiki.html">WIKI</a></li>
  <li><a href="bid.html">BIDD</a></li>
  <li><a href="forum.html">FORUM</a></li>
  <li><a href="tok-tok.html">FAQ</a></li>
  <li><a href="#" class="MenuBarItemSubmenu">OTHER</a>
    <ul>
      <li><a href="#">Untitled Item</a></li>
      <li><a href="#">Untitled Item</a></li>
      <li><a href="#">Settings</a>        </li>
</ul>
  </li>
</ul>
<p>&nbsp;</p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</div>
<div id="apDiv5">
  <p>baas.lk    </p>
  <p>All Rights Reserved </p>
</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body>

</html>















<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>     
<?php 
if (isset($_POST["request"]))    
{    
          if($_GET["request"]=="profile-update" && $_GET["status"]=="success"){
        $dialogue="Your profile update was successful! ";
    }
    else if($_GET["request"]=="profile-update" && $_GET["status"]=="unsuccess"){
        $dialogue="Your profile update was not at all successful! ";
    }
    else if($_GET["request"]=="login" && $_GET["status"]=="success"){
        $dialogue="Welcome back again! ";
    }
}  
    
?>
  
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <h1 class="text-center">Welcome to your profile</h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <p><a href="edit-profile.php">Edit your profile</a></p>
          <p><a href="components/logout.php">Logout</a></p>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>