<?php
session_start();
session_destroy();
header('Location: /estoque/index.php');
exit();
?>