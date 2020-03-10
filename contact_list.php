<?php 
require_once('./private/database.php');

// Get all categories
$query = 'SELECT * FROM contact_list
                       ORDER BY lastName';
$statement = $db->prepare($query);
$statement->execute();
$contacts = $statement->fetchAll();
$statement->closeCursor();

?>

<!DOCTYPE html>
<html>


<!-- the head section -->
<head>
    <title>Contact List</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<header><h1>Contact List</h1></header>
    <table class="table table-hover table-dark">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>email</th>
        </tr>
        <?php foreach ($contacts as $contact) : ?>
            <tr>
                <td><?php echo $contact['firstName']; ?></td>
                <td ><?php echo $contact['lastName']; ?></td>
                <td ><?php echo $contact['phoneNumber']; ?></td>
                <td ><?php echo $contact['email']; ?></td>
                
                <!-- delete button -->
                <td>
                    <form action="delete.php" method="post">
                    <input type="hidden" name="contact_id" 
                            value="<?php echo $contact['contactID']; ?>">
                    <input type="submit" value="Delete">
                    </form>
                </td>
                </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>