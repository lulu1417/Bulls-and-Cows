<title>Rank</title>
<body>
<div class="flex-center position-ref full-height ">
    <div class="top-right home">
        <a href="restart.php">Restart</a>
    </div>

    <div class="content m-b-md">
        <div class="title">
            Rank
        </div>
<?php
include 'style.css';
include 'db.php';
$sql1 = "select * from rank ";
$result = mysqli_query($db, $sql1);
$space = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";

$sql = "select * from rank ORDER BY total ";
$result = mysqli_query($db, $sql);?>
<div class="rank">
<?php
$i = 1;
echo "$space  &nbsp&nbsp&nbsp&nbsp Player &nbsp&nbsp Times &nbsp&nbsp Time "."<br>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "No. $i";
    echo $space . $row['name'];
    echo $space . $row['times'];
    echo $space . $row['min'].":".$row['sec']."<br>";
//    echo "<hr>";
    $i++;
}
for ($i = 0; $i < 12; $i++) {
    echo "&nbsp";
}
echo "<br>";
echo '<div class="bottom left position-abs content">';
header("Refresh:5;url=restart.php")
?>
</div>
