<title>Bulls and Cows</title>
<?php
include 'db.php';
include 'style.css';
session_start();
$sql1 = "select * from guess where ( hint='Answer Correct')";
$result = mysqli_query($db, $sql1);
$row = mysqli_fetch_assoc($result);
$times = $row['id'];
$totalTime = ($_SESSION["endTime"] - $_SESSION["startTime"]);
if($totalTime > 60){
    $spentMin = (int)(($_SESSION["endTime"] - $_SESSION["startTime"])/60);
}else{
    $spentMin = 0;
}
$spentSec = ($_SESSION["endTime"] - $_SESSION["startTime"])%60;
$total = $times + $spentMin;
$sql2 = "INSERT rank(times, min, sec, total) VALUES ('$times', '$spentMin', '$spentSec', '$total')";
mysqli_query($db, $sql2);
?>

<body>
<div class="flex-center position-ref full-height ">
    <div class="top-right home">
        <a href="restart.php">Restart</a>
        <a href="rank.php">RANK</a>
    </div>

    <div class="content">
        <div class="m-b-md">
            <div class="title">

                <?="Answer Correct, Congratulations ！！";
                echo"<br>You spent ".$spentMin. " minutes and ".$spentSec." seconds.";
                header("Refresh:5;url=rank.php");

                ?>
            </div>

        </div>
    </div>

</body>
</html>
