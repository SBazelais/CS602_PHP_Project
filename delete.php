<?php 
require_once('./private/database.php');

//get contact
$contact_id = filter_input(INPUT_POST, 'contact_id', FILTER_VALIDATE_INT);

//validation
 if ($contact_id != null || $contact_id != false) {
   
   $query = 'DELETE FROM contact_list
            WHERE contactID = :contact_id';
   $statement = $db->prepare($query);
   $statement->bindinValue(':contact_id', $contact_id);
   $deletion = $statement->execute();
   $statement-closeCursor();
  
 }else {
  echo 'deletion was not successfull';
 }

include('index.php');

?>