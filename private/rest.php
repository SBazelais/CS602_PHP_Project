<?php

 require('database.php');
  
//retrieving data from database
  $query = 'SELECT * 
          FROM contact_list 
          ORDER BY lastName';
  $statement = $db->prepare($query);
  $statement->execute();
  $contacts = $statement->fetchALL();
  $statement->closeCursor();

function pr_dump($var) { 
	print '<pre>'; print_r($var); print '</pre>'; 
};

pr_dump($contacts);


?>
