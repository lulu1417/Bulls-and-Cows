<?php
include 'db.php';
session_start();
$sql1 = "truncate guess;";
$sql2 = "truncate note;";
$_SESSION['answer'] = null;
if (!mysqli_query($db, $sql1) || !mysqli_query($db, $sql2)) {
    echo "truncate error";
    die(mysqli_error());
}else{
    header("location:index.php");
}
