<?php							
	$conn= mysqli_connect('localhost','root','');
	$sel=mysqli_select_db($conn,"frizerie");
	if(isset($_POST["submit"])){
		$yourName = $conn->real_escape_string($_POST['nume']);
		$yourPrenume = $conn->real_escape_string($_POST['prenume']);
		$yourEmail = $conn->real_escape_string($_POST['email']);
		$yourPhone = $conn->real_escape_string($_POST['telefon']);
		$comments = $conn->real_escape_string($_POST['detalii']);
		$data = $conn->real_escape_string($_POST['data']);
		$ora = $conn->real_escape_string($_POST['ora']);
		$space=" ";
		$programat=$yourName.$space.$yourPrenume;
		$sql="INSERT INTO programare (nume, prenume, email, telefon, detalii) VALUES ('".$yourName."','".$yourPrenume."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
		$sqll="insert into verificare (datav,orav,programat) values('".$data."','".$ora."','".$programat."')";
		$result1=mysqli_query($conn,$sqll);
		$result = mysqli_query($conn,$sql);
		header('Location: ' . $_SERVER['HTTP_REFERER']);
	}
?>