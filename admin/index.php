<?php
session_start();
if ($_SESSION["level"] == 2) {
	require 'include/header.php';
	require 'include/bg.php';
	require 'include/footer.php';
} else {
	header("Location:../index.php");
	exit();
}

?>


