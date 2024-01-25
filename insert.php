<?php 

$con = mysqli_connect("localhost","root","","dynamic") or die("error");

if(isset($_REQUEST['sbm'])){
	$name = $_POST['name'];
	$pass = $_POST['pass'];
	$file = $_FILES['fileok'];

	// echo $name;
	// echo $pass;
	// print_r($file);
     
    $img_name = $_FILES['fileok']['name'];
	$img_typ = $_FILES['fileok']['type'];
	$img_temp = $_FILES['fileok']['tmp_name'];


	$location = "new_folder/";
	$file = $location.$img_name;

	$target = "new_folder/";
	$finalImage = $target.$img_name;

	move_uploaded_file($img_temp, $finalImage);

	// echo $name . " " . $pass . " ".$finalImage;

	$query = mysqli_query($con, "INSERT INTO upload(name,pass,img) VALUES('$name','$pass','$finalImage')");

	if($query){
		echo "<script>alert('successfully going');window.location.href='index.php'</script>";
	}
	else{
		echo "<script>alert('firse dekho priay');window.location.href='index.php'</script>";
	}

}




 ?>