<?php 
	
	include('db_connect.php');


	// Add photo function
	if (isset($_POST['btn_add'])) {
		$name = mysqli_real_escape_string($con, $_POST['imgname']);
		$cat = mysqli_real_escape_string($con, $_POST['cat']);
		$des = mysqli_real_escape_string($con, $_POST['des']);

		$file_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = 'upload/'. $file_name;

		$sql = "INSERT INTO tbl_photographs(Name,Cat,Image,Description) VALUE ('$name','$cat','$file_name','$des')";
		$run = mysqli_query($con,$sql);

		if ($run) {
			move_uploaded_file($_FILES['image']['tmp_name'], $folder);
			header("Location:view_photo.php");
		} 
		else {
			echo "Failed";
		}
	}


	// Edit photo function
	if (isset($_POST['btn_edit'])) {
		
		$id = mysqli_real_escape_string($con,$_POST['id']);
		$abc = mysqli_real_escape_string($con,$_POST['img_name']);
		$cat = mysqli_real_escape_string($con,$_POST['cat']);
		$des = mysqli_real_escape_string($con,$_POST['des']);

		$file_name = $_FILES['image']['name'];
		$tmp_name = $_FILES['image']['tmp_name'];
		$folder = 'upload/'.$file_name;

		$sql = "UPDATE tbl_photographs SET Name ='$abc', Cat = '$cat', Image='$file_name ', Description='$des'  WHERE ID = '$id'";

		$run = mysqli_query($con,$sql);

		if ($run) {
				move_uploaded_file($_FILES['image']['tmp_name'], $folder);
				header("Location:edit_photo.php");
		}
		else{
			echo "Failed";
		}
	}


	// Delete photo function
	if (isset($_POST['delete'])) {
		$_id = mysqli_real_escape_string($con,$_POST['delete']);

		$sql = "DELETE FROM tbl_photographs WHERE ID = '$_id'";

		$run = mysqli_query($con, $sql);

		if ($run) {
			header("Location:edit_photo.php");
		}else{
			header("Location:main.php");
		}
	}


	// Submit enquiry function
	if (isset($_POST['btn_enquiry'])) {
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$loc = mysqli_real_escape_string($con, $_POST['loc']);
		$date = mysqli_real_escape_string($con, $_POST['date']);
		$des = mysqli_real_escape_string($con, $_POST['des']);

		$sql = "INSERT INTO tbl_enquiry(En_name,Email_address,Location,En_date,Description) VALUE ('$name','$email','$loc','$date','$des')";
		$run = mysqli_query($con,$sql);

		if ($run) {
			header("Location:en_success.php");
		} 
		else {
			echo "Failed";
		}
	}
?>


