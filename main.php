<title>Bulls and Cows</title>
<?php
include 'style.css';
include 'judge.php';
session_start();
if(!$_SESSION["name"]){
    $name = $_SESSION["name"] = $_POST["name"];
}

?>

<body>
<div class="flex-center position-ref full-height ">
    <div class="top-right home">
        <a href="restart.php">Restart</a>
        <a href="rank.php">RANK</a>
    </div>

    <div class="content m-b-md">
        <div class="title">
            Number Guessing
        </div>
        <div class="rule ">
            規則：猜四位數字，數字包含0~9（可重複）</br></br>
            數字與位置正確為A，數字正確但位置不正確則為B</br></br>
            Ex. 正解為1341，猜1354則會得到線索2A1B</br></br>

        </div>
        <div class="content">
            <body OnLoad="document.form1.subject.focus();">
            <form name="form1" action="guess.php" method="post">

                <p>✔️&nbsp&nbsp<input style="background: #adc4b2" type="text" name="sure"   value="<?= $_SESSION["sure"] ?>">&nbsp&nbsp✖️&nbsp&nbsp<input style="background:#e0c5c8" type="text" name="no"  autocomplete="off" value="<?= $_SESSION["no"] ?>">
                    <input type="reset" name="Reset" value="Reset"></p>

                <p>✏️&nbsp
                    <input  style="background: #e3d8c5" type="text" name="reg1" size="1" autocomplete="off" value="<?= $_SESSION["reg1"] ?>">
                    <input  style="background: #e3d8c5" type="text" name="reg2" size="1" autocomplete="off" value="<?= $_SESSION["reg2"] ?>">
                    <input  style="background: #e3d8c5" type="text" name="reg3" size="1" autocomplete="off" value="<?= $_SESSION["reg3"] ?>">
                    <input  style="background: #e3d8c5" type="text" name="reg4" size="1" autocomplete="off" value="<?= $_SESSION["reg4"] ?>">
                    <input type="reset" name="Reset" value="Reset"></p>

                <p><strong>Input your guess ➡️ <input type="text" name="subject" maxlength="4" autocomplete="off"></p>
                <p><input type="submit" name="submit" value="Guess"> <input type="reset" name="Reset" value="Reset">

                    <style>
                        input {
                            padding: 5px 15px;
                            background: #89a4b0;
                            border: 0 none;
                            cursor: pointer;
                            -webkit-border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-weight: 900;
                            border-radius: 5px;
                            font-size: 19px;
                        }
                    </style>
            </form>
            </body>
            <div class="content">
                <?php
                //show record
                include "db.php";
                $ans = $_SESSION["answer"];
                $sql1 = "select * from note ";
                $result = mysqli_query($db, $sql1);
                $space = "&nbsp&nbsp&nbsp&nbsp";

                $sql = "select * from guess ORDER BY id DESC ";
                $result = mysqli_query($db, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "[" . $row['id'] . "]&nbsp";
//                    echo $space . nl2br($row['answer']);
                    echo $space . nl2br($row['guess']);
                    echo $space . $row['hint'] . "<br>";
                    echo "<hr>";
                }
                for ($i = 0; $i < 9; $i++) {
                    echo "&nbsp";
                }
                echo "<br>";
                echo '<div class="bottom left position-abs content">';
                ?>

            </div>

        </div>
    </div>

</body>
</html>