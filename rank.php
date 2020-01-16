<title>Rank</title>
<body>
<div class="flex-center position-ref full-height ">
    <div class="top-right home">
        <a href="index.php">Restart</a>
    </div>

    <div class="contentR m-b-md">
        <div class="title">
            Rank
        </div>
        <?php
        include 'style.html';
        include 'db.php';
        $sql1 = "select * from rank ";
        $result = mysqli_query($db, $sql1);

        $sql = "select * from rank ORDER BY total ";
        $result = mysqli_query($db, $sql);?>
        <div class="rank">
            <div class="title1">
                <div class="title1__rank">排名</div>
                <div class="title1__playerName">玩家</div>
                <div class="title1__times">次數</div>
                <div class="title1__time">時間</div>
            </div>
<?php
$i = 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="player">';
    echo '<div class="player__rank">No.'.$i."</div>";
    echo '<div class="player__name">'.$row['name']."</div>";
    echo '<div class="player__times">'.$row['times']."</div>";
    echo '<div class="player__time">'.$row['min'].":".$row['sec']."</div>";
    echo '</div>';
    $i++;
}
header("Refresh:5;url=index.php")
?>