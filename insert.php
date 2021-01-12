<?php
require_once('./config/config.php');
require_once('./functions/functions.php');
connect();
$conn = connect();
insertData($conn);
close($conn)
?>