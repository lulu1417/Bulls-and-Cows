
<?php
session_start();
include "db.php";
include "judge.php";
include "style.css";

$guess = $_POST["subject"];
$no = $_SESSION["no"] = $_POST["no"];
$sure = $_SESSION["sure"] = $_POST["sure"];
$reg1 = $_SESSION["reg1"] = $_POST["reg1"];
$reg2 = $_SESSION["reg2"] = $_POST["reg2"];
$reg3 = $_SESSION["reg3"] = $_POST["reg3"];
$reg4 = $_SESSION["reg4"] = $_POST["reg4"];
$i = 0;
while ($i < 10) {
	$i++;
}

$judge = new judge;
if (!$_SESSION["answer"]) {
	$ans = $_SESSION["answer"] = $judge->answer();
	$_SESSION["startTime"] = $startTime = date("H") * 3600 + date("i") * 60 + date("s");
} else {
	$ans = $_SESSION["answer"];
}

if (strlen($guess) < 4) {
	header("location:main.php");
} else {
	$hint = $judge->check($guess, $ans);
	$answer = implode($ans);
	$sql1 = "INSERT guess(guess, hint) VALUES ('$guess', '$hint')";
	if (!mysqli_query($db, $sql1)) {
		echo "insert error";
	} else if ($hint == "Answer Correct") {
		$_SESSION["endTime"] = $endTime = date("H") * 3600 + date("i") * 60 + date("s");
		header("location:correct.php");
	} else {
		header("location:main.php");
	}
}