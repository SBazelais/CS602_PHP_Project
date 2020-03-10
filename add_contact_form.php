<?php
  require('./Private/database.php');
  
//retrieving data from database
  $query = 'SELECT * 
          FROM contact_list 
          ORDER BY lastName';
  $statement = $db->prepare($query);
  $statement->execute();
  $contacts = $statement->fetchALL();
  $statement->closeCursor();
?>

<!DOCTYPE html>
<html>
  <head><title>Add new contact</title></head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <body>

    <h3>Please fill in the form below:</h3>
   <form action="add_contact.php" method="post" id="add_contact_form">
      <lable>First Name:</lable>
      <input type="text" name="firstName"><br>
     
      <lable>Last Name:</lable>
      <input type="text" name="lastName"><br>

      <lable>Phone Number:</lable>
      <input type="text" name="phoneNumber"><br>
      
     <lable>Email:</lable>
      <input type="email" name="email"><br>
      <input type="submit">
    </form>
   
  </body>
</html>