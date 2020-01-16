
<?php
session_start();
include 'db.php';
include 'style.html';
$name = $_SESSION["name"];
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
$total = $times + $spentMin + ($spentSec/100);
$sql2 = "INSERT rank(name, times, min, sec, total) VALUES ('$name','$times', '$spentMin', '$spentSec', '$total')";
mysqli_query($db, $sql2);
?>
<title>Congratulations</title>
<body>
<div class="flex-center position-ref full-height ">
    <div class="top-right home">
        <a href="index.php">Restart</a>
        <a href="rank.php">RANK</a>
    </div>

    <div class="content">
        <div class="m-b-md">
            <div class="title">

                <?="Answer Correct, <br> Congratulations ".$name."！！";
                echo"<br>You spent ".$spentMin. " minutes and ".$spentSec." seconds.";
                header("Refresh:5;url=rank.php");

                ?>
            </div>

        </div>
    </div>

</body>
</html>
