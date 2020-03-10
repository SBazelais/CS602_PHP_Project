<?php require_once('./Private/database.php');

//get all courses
$query = 'SELECT * 
            FROM contact_list
                ORDER BY contactID';
$statement = $db->prepare($query);
$statement->execute();
$courses = $statement->fetchAll();
$statement->closeCursor();

$courseID = filter_input(INPUT_GET, 'course_id'); 

?>
  
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Phone Book Application</title>
	</head>
	<body>
		<div class="header">
			<h1>Phone Book Application</h1>
		</div>
		<h3>Welcome to the easy phone book application that allows users to add and delete contact safe and easy.</h3>
	<div class="links">
		<a href="add_contact_form.php"> Add contact</a><br>
		<a href="contact_list.php"> View List of contacts</a>
	</div>
	</body>
  
  
</html>