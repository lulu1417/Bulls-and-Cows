
<?php
session_start();
include 'style.html';
include 'judge.php';
if (!$_SESSION["name"]) {
	$name = $_SESSION["name"] = $_POST["name"];
}

?>

<body<title>Bulls and Cows</title>>
<nav class="top-right home">
    <a href="index.php">Restart</a>
    <a href="rank.php">RANK</a>
</nav>
<section>
    <h1
            class="title">
        Number Guessing
    </h1>
    <div class="rule ">
        <p>規則：猜四位數字，範圍介於0~9（可重複）</p>
        <p>數字與位置正確為A，數字正確但位置不正確則為B</p>
        <p>Ex. 正解為1341，猜1354則會得到線索2A1B</p>

    </div>
    <div class="content flex-center">
        <body OnLoad="document.form1.subject.focus();">
        <form name="form1" action="guess.php" method="post" style="width: 50%;">
            <section class="note">
                <p><strong>Enter your answer ➡️ ️</strong>
                    <input type="text" name="subject" maxlength="4" autocomplete="off"></p>
                <p><input type="submit" name="submit" value="Guess"> <input type="reset" name="Reset" value="Reset">
            </section>
<!--            筆記區-->
                <p><strong>You can make notes here️</strong></p>
            <p>✔️&nbsp;&nbsp;<input style="background: #adc4b2" type="text" name="sure" autocomplete="off" value="<?=$_SESSION["sure"]?>">
               <p> &nbsp✖️&nbsp;&nbsp;<input style="background:#e0c5c8" type="text" name="no" autocomplete="off" value="<?=$_SESSION["no"]?>"></p>
                ✏️&nbsp;<input style="background: #e3d8c5" type="text" name="reg1" size="1" autocomplete="off" value="<?=$_SESSION["reg1"]?>">
                <input style="background: #e3d8c5" type="text" name="reg2" size="1" autocomplete="off" value="<?=$_SESSION["reg2"]?>">
                <input style="background: #e3d8c5" type="text" name="reg3" size="1" autocomplete="off" value="<?=$_SESSION["reg3"]?>">
                <input style="background: #e3d8c5" type="text" name="reg4" size="1" autocomplete="off" value="<?=$_SESSION["reg4"]?>">

            </p>

                    <style>
                        input {
                            padding: 10px 10px;
                            background: #9cc8d6;
                            cursor: pointer;
                            -webkit-border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-weight: 900;
                            border: none;
                            font-size: 22px;
                            margin:2px;
                        }
                    </style>
                </p>


            </strong>
        </form>

</body>
        <?php
if ($_SESSION["answer"]) {
	?>
<div class="hint" style="
    width: 50%;
">
    <?php
//show record
	include "db.php";
	$ans = $_SESSION["answer"];
//	$sql1 = "select * from note ";
	$result = mysqli_query($db, $sql1);
	$sql = "select * from guess ORDER BY id DESC ";
	$result = mysqli_query($db, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="player">';
		echo '<div class="player__id">' . $row['id'] . "</div>";
		echo '<div class="player__guess">' . $row['guess'] . "</div>";
		echo '<div class="player__hint">' . $row['hint'] . "</div>";
		echo '</div>';
	}
}
?>

</div>

</div>
</div>
</section>

</body>
</html>
