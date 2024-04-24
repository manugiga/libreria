<?php
session_start();
session_destroy();
header("Location: /libreria/index.php");
exit;
?>
