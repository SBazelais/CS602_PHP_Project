<?php 
 //get data
$firstName = filter_input(INPUT_POST, 'firstName');
$lastName = filter_input(INPUT_POST, 'lastName');
$phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

//validating entry
if($firstName == null || $lastName == null || $phoneNumber == null || $email == null) {
  echo "Entry was entered incorrectly or field has missing data";
} else {

	require_once('./Private/database.php');

  //add contact to database
  $query = 'INSERT INTO contact_list 
            (firstName, lastName, phoneNumber ,email)
            VALUES
            (:firstName, :lastName, :phoneNumber, :email)';
$statement = $db->prepare($query);
$statement->bindValue(':firstName', $firstName);
$statement->bindValue(':lastName', $lastName);
$statement->bindValue(':phoneNumber', $phoneNumber);
$statement->bindValue(':email', $email);  
$statement->execute();
$statement->closeCursor();  
}


//display contact list
include('index.php');

?>
