<?php
$conn= mysqli_connect("localhost","root","","export") or die("Connection Failed");
$sql="SELECT * FROM `tblsocial` WHERE `IsActive`=1";
// Run coomand
$result=mysqli_query($conn,$sql) or die("SQL Query Failed.");
        $i=0;
        $comments = array();
        $hashtag = array();
        if(mysqli_num_rows($result)>0){
    
    	        while($row=mysqli_fetch_assoc($result)){
	        		$comments[]=$row['Comments'];
	        		$hashtag[]=$row['Tags'];
	        	}
        }

?>