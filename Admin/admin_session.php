<?php
session_start();
if (!isset($_SESSION['mySession']))
{
  echo "<script>alert('Please login!'); window.location.href='index.php';</script>";
}
$adminid = $_SESSION['admin_id'];
?>
