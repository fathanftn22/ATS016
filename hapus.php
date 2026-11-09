<?php
session_start();
if(!isset($_SESSION['email'])) { header("location: login.php"); exit; }
include "koneksi.php";

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM mobil_016 WHERE no_id='$id'");
header("location: index.php");
?>