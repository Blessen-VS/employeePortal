<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "MY Notes";

$notes = $db->query("select * from notes where user_id = 3")->fetchAll();

dd($notes);

require("views/Notes.view.php");
?>