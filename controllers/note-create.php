<?php
$config = require('config.php');
$db = new Database($config['database']);
$heading = "Create Employee";


//$notes = $db->query("select * from notes where id= :id", ['id' => $id])->fetchAll();

// if ($_SERVER["REQUEST_METHOD"] === "POST") {

//     $db->query("INSERT INTO users(first_name, last_name, email, street_address)", [
//         'first_name'=> $_POST['first_name'],
//         'last_name'=> $_POST['last_name'],
//         'email'=> $_POST['email'],
//         'street_address'=> $_POST['street_address'],
//     ]);

// }

require("views/note-create.view.php");
?>