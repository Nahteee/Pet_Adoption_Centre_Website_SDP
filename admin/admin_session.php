<?php
session_start();
if (!isset($_SESSION['mySession']))
{
  echo "<script>alert('Please login!'); window.location.href='adminindex.php';</script>";
}
$adminid = $_SESSION['admin_id'];
?>
