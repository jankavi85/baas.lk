<!DOCTYPE html>
<!-- saved from url=(0015)http://baas.lk/ -->
<html hola_ext_inject="disabled"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>baas.lk</title>

<link href="profile.css" rel="stylesheet">

<link href="./SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<style type="text/css">

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>


<style>
#apDiv8 {
	position:absolute;
	width:100%;
	height:420px;
	z-index:1;
	top: 80px;
	background-color: #999999;
}
#apDiv9 {
	position:absolute;
	width:100%;
	height:5px;
	z-index:5;
	left: -176px;
	top: -80px;
	background-color: #333333;
}

#apDivtabmain {
	position:absolute;
	width:769px;
	height:382px;
	z-index:7;
	left: 235px;
	top: 200px;
}
</style>

<script src="./SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv12 {
	position:absolute;
	width:196px;
	height:364px;
	z-index:8;
	left: 9px;
	top: 199px;
	background-color: #999;
	border-top-color: #666;
	border-right-color: #666;
	border-bottom-color: #666;
	border-left-color: #666;
	overflow: scroll;
}
#form-label{
	position:absolute;
	width:195px;
	height:58px;
	z-index:9;
}
#apDiv13 {
	position:absolute;
	width:197px;
	height:73px;
	z-index:9;
	left: 1px;
	top: 104px;
}
#apDiv14 {
	position:absolute;
	width:227px;
	height:147px;
	z-index:9;
	left: 2px;
	top: 195px;
}
#apDiv15 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:9;
}
#apDiv16 {
	position:absolute;
	width:120px;
	height:57px;
	z-index:9;
	left: 20px;
	top: 261px;
}


</style>

 
    
       

<div id="apDivtabmain">
  <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <li class="TabbedPanelsTab" tabindex="0">General</li>
      <li class="TabbedPanelsTab" tabindex="0">Personal</li>
      <li class="TabbedPanelsTab" tabindex="0">Authentication</li>
    </ul>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        
       
        <form name="form1" method="post" action="components/update-profile-general.php" enctype="multipart/form-data" >
		
		 <div id="form-label">
         <label> First Name</label>
         
        <input type="text" placeholder="			<?php echo $rws['user_firstname'];?>" name="user_firstname" 	value="<?php echo $rws['user_firstname'];?>">
                
         </div>

        
        
       
       
       
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <div id="apDiv13">
          <label for="label">Last Name</label>
          <input type="text" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
        </div>
        
        
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
     
         
			 
		 
		 
        <label>Profile Picture</label>
		<br>
			
        <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" width="200" height="200">
        <input name="ImageFile" type="file" id="uploadFile"/>
		  <center>
	
     
        <div class="submit">
          
          <center>
       
			  <input type="submit" name="submit" id="submit" value="Save">
		
        </center>
		
		</div>
        </form>
      </div>
      <div class="TabbedPanelsContent">
      
        
        <form name="form1" method="post" action="components/update-profile-personal.php" enctype="multipart/form-data" >
		
		
		            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Previous work done</label>
                    <textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="10" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Birthday</label>  
					
                    <input type="date" class="" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
					
                </div>
                <div class="form-group float-label-control">
                    <label for="">Profession</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>" id="profession">    
                </div>  
                <label for="">Gender</label>              
                <div class="form-group float-label-control">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked>Male</label>
                    </div>              
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Female">Female</label>
                    </div>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Country</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_country'];?>" name="user_country" value="<?php echo $rws['user_country'];?>" id="country">    
                </div>
            </div>
			
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>">    
                </div>
                <label for="">Website</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_website'];?>" name="user_website" value="<?php echo $rws['user_website'];?>">                  
                    </div>
                </div> 
            </div>
		
		
		

	
     
        <div class="submit">
          
          <center>
       
			  <input type="submit" name="submit" id="submit2" value="Save">
		
        </center>
		
		</div>
        </form>
      
      
      
      
      
      
      
      
      
      </div>
      <div class="TabbedPanelsContent">
      
      
      
      
                  <div class="col-md-6">
			
			<hr/>
             <form method="post" action="edit.php" name="user_edit_form_name">
			<label for="user_name"><?php echo "New Username"; ?></label>
			<input id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo "Currently"; ?>: <?php echo htmlspecialchars($_SESSION['user_name']); ?>)
			<input type="submit" name="user_edit_submit_name" value="<?php echo "Change Username"; ?>" />
			</form>
			
			<hr/>
			
			<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
			<form method="post" action="edit.php" name="user_edit_form_email">
				<br>
				<label for="user_email"><?php echo "New Email"; ?></label>
				<input id="user_email" type="email" name="user_email" required /> (<?php echo "Currently"; ?>: <?php echo htmlspecialchars($_SESSION['user_email']); ?>)
				<input type="submit" name="user_edit_submit_email" value="<?php echo "Change Email"; ?>" />
			</form><hr/>

			<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
			<form method="post" action="edit.php" name="user_edit_form_password">
				<label for="user_password_old"><?php echo "Old password"; ?></label>
				
				<input id="user_password_old" type="password" name="user_password_old" autocomplete="off" />
				<label for="user_password_new">  <?php echo " New password"; ?></label>
				<input id="user_password_new" type="password" name="user_password_new" autocomplete="off" />
				<label for="user_password_repeat"> <?php echo "New password repeat"; ?></label>
				<input id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />
				<br>
				<input type="submit" name="user_edit_submit_password" value="<?php echo "Change password"; ?>" />
			</form><hr/>

			<p>
			  <!-- backlink -->
			  
			  <a href="login.php"><?php echo "Back to login"; ?></a>
			  
			  
			  
			  
			  
			  </p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
         </div>
      </div>
    </div>
  </div>
</div>

<div id="apDiv12">Recent Feedbacks</div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script><br>
<br>
<br>
<br>

</body></html>