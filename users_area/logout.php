<?php

session_start();
session_unset();
session_destroy();
echo "<script>window.open('../myfirstphp.php','_self')</script>";
?>