<?php
include('config.php')
?>

<?php

if(isset($_POST['submit'])){
	echo "hello";
	$username = $_POST['name'];
	$branch = $_POST['branch'];
	$year = $_POST['year'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];

	$sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";	
	if(!mysqli_query($conn, $sql)){
		echo "Error1 ". mysqli_error($conn);
	}
	else{
		echo "Data sent successfully....1";
	}
	$sql = "INSERT INTO `student_details` (`username`, `branch`, `year`) VALUES ('$username', '$branch', '$year')";
	if(!mysqli_query($conn, $sql)){
		echo "Error2 ". mysqli_error($conn);
	}
	else{
		echo "Data sent successfully....2";
	}
}
else{
	echo "please enter the details";
}

?>

<!DOCTYPE html>
<head>
</head>
<html>
  <body>
    <form method="POST" action="form.php">
        Name <input type="text" name="name" required ><br>
        E-mail <input type="text" name="email" required ><br>
        branch <input type="text" name="branch" required><br>
        Year <input type="number" name="year" required><br>
        City <input type="text" name="city" required><br>
        Gender:
        Male <input type="radio" value="male" name="gender"> 
        Female <input type="radio" value="female" name="gender"><br>
        <input type="submit" value="submit" name="submit"><br>
    </form>
  </body>
</html>