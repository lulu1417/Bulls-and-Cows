<?php
include 'db.php';
session_start();
$sql1 = "truncate guess;";
$_SESSION['answer'] = null;
$_SESSION["reg1"] = null;
$_SESSION["reg2"] = null;
$_SESSION["reg3"] = null;
$_SESSION["reg4"] = null;
if (!mysqli_query($db, $sql1) ) {
    echo "truncate error";
    die(mysqli_error());
}else{
    header("location:index.php");
}
