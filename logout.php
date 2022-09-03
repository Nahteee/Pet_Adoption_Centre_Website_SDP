<?php
session_start();
echo "<script>alert('Successfully Logged Out!'); window.location.href='index.php';</script>";
session_destroy();
?>
