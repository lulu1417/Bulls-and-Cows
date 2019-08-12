<?php
include 'db.php';
session_start();
$sql1 = "truncate guess;";
$_SESSION = array();
if (!mysqli_query($db, $sql1) ) {
    echo "truncate error";
    die(mysqli_error());
}else{
    header("location:index.php");
}
