<?php
    $current_user = $_SESSION['user_name'];
    $sql = "SELECT * FROM users WHERE user_name='$current_user'";
    $result = mysqli_query($database,$sql);
    while($row = mysqli_fetch_array($result,MYSQLI_BOTH)) {
?>
    
	
	
	    <div>
		
		<?php echo "Login as:".$row['user_firstname'];?> <?php echo $row['user_lastname'];?>                 
        </right>   
	    </div>
     
<?php
    }
?>