<?php

  $studentName = $_POST['studentName'];
  $parentName = $_POST['parentName'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $school = $_POST['school'];
  $class = $_POST['class'];
  $section = $_POST['section'];

  // Database connection
  $conn = new mysqli('localhost','root','','details');
  if($conn->connect_error)
  {
	 echo "$conn->connect_error";
	 die("Connection Failed : ". $conn->connect_error);
  } else 
  {
	 $stmt = $conn->prepare("insert into studentdetails(studentName, parentName, gender, dob, school, class, section) values(?, ?, ?, ?, ?, ?, ?)");
	 $stmt->bind_param("sssssss", $studentName, $parentName, $gender, $dob, $school, $class, $section);
	 $execval = $stmt->execute();
	 //echo $execval;
	 echo "Details Updated Successfully...";
	 $stmt->close();
	 $conn->close();
  }
?>