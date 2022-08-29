<?php
session_start();
if (!isset($_SESSION['username']))
{
  echo "<script>alert('Please login first!'); window.location.href='../index.php';</script>";
}
$userid = $_SESSION['userID'];
?>
