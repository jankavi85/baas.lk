<?php
    ini_set("display_errors",1);
    session_start();
    $temp=$_SESSION['user_name'];
    if(isset($_POST)){
        require '../_database/database.php';
      
        $Destination = '../userfiles/avatars';
		
		
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.png';
			
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
			
            $RandomNum   = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        $sql5="UPDATE users SET user_avatar='$NewImageName' WHERE user_name = '$temp'";
        $sql6="INSERT INTO users (user_avatar) VALUES ('$NewImageName') WHERE user_name = '$temp'";
        $result = mysqli_query($database,"SELECT * FROM users WHERE user_name = '$temp'");
        if( mysqli_num_rows($result) > 0) {
            if(!empty($_FILES['ImageFile']['name'])){
                mysqli_query($database,$sql5)or die(mysqli_error($database));
                header("location:../edit-profile.php?user_name=$temp");
            }
        } 
        else {
            mysqli_query($database,$sql6)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_name=$temp");
        }  
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_email=$_REQUEST['user_email'];
        $user_password=$_REQUEST['user_password'];
        $user_profession=$_REQUEST['user_profession'];
        $user_address=$_REQUEST['user_address'];
        $user_shortbio=$_REQUEST['user_shortbio'];   
        $user_longbio=$_REQUEST['user_longbio'];   
        $user_dob=$_REQUEST['user_dob'];
        $user_gender=$_REQUEST['user_gender'];
        $user_country=$_REQUEST['user_country'];
        $user_website=$_REQUEST['user_website'];
        $user_facebook=$_REQUEST['user_facebook'];
        $user_twitter=$_REQUEST['user_twitter'];
        $user_googleplus=$_REQUEST['user_googleplus'];
        $user_skype=$_REQUEST['user_skype'];
        $user_github=$_REQUEST['user_github'];
        $user_youtube=$_REQUEST['user_youtube'];
        $user_vimeo=$_REQUEST['user_vimeo'];
        $user_pinterest=$_REQUEST['user_pinterest'];
        $sql3="UPDATE users SET user_firstname='$user_firstname',user_lastname='$user_lastname' WHERE user_name = '$temp'";
        mysqli_query($database,$sql3)or die(mysqli_error($database));
        header("location:../edit-profile.php?user_name=$temp&request=profile-update&status=success");
    }    
?>