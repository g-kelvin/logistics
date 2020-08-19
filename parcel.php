<?php 

	$con= mysqli_connect("localhost","root", "oZG)K#8y0r26hB","bwdscoke_bwds");
	if(!$con){
		echo "connection_aborted";
	}
	else
	{
		if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST'){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$tel = $_POST['tel'];
			$idno = $_POST['idno'];
			$country = $_POST['country'];
			$town = $_POST['town'];

			$rname = $_POST['rname'];
			$remail = $_POST['remail'];
			$rtel = $_POST['rtel'];
			$ridno = $_POST['ridno'];
			$rcountry = $_POST['rcountry'];
			$rtown = $_POST['rtown'];
			$timee = $_POST['timee'];
			$datee = $_POST['datee'];
			$message = $_POST['message'];


			$qry = mysqli_query ($con, "INSERT INTO parcels (name, email, tel, idno, country, town, timee, datee, rname, remail, rtel, ridno, rcountry, rtown, message) VALUES ('$name','$email','$tel','$idno','$country','$town' ,'$timee','$datee','$rname','$remail','$rtel','$ridno','$rcountry','$rtown','$message')");

			if($qry){
				echo "Successfully Registered";
			}

			else{
				echo "Not Registered";
			}


		}
		else{
			echo "It's empty";
		}
	}


 ?>