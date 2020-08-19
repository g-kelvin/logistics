<?php
	$con = mysqli_connect('localhost', 'root', '', 'bds');
	if(!$con){
		echo "Connection Aborted";
	}
	else{
		$search = $_POST['search'];
		echo "$search";
		$qry =  "SELECT * FROM parcels where id = '$search'";
		$res = mysqli_query($con,$qry);
		if(mysqli_num_rows($res)>0){
			while ($row= mysqli_fetch_assoc($res)){
				echo "Parcel Number: " .$row['id']."<br> Sent By: ". $row['name']." Sent To: ". $row['rname']."<br> From ". $row['town']." To ". $row['rtown']." Was Sent on ". $row['datee']." ".$row['timee'];
			}
		}
		else{
			echo "The Track Number is not Valid";
		}
	}
	


  ?>