<?php
session_start();
if (!isset($_SESSION['username']))
{
  echo "<script>alert('Please login!'); window.location.href='../index.php';</script>";
}
$userid = $_SESSION['userID'];
?>
