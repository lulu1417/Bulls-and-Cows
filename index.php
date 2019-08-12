<title>Bulls and Cows</title>
<?php
include 'style.css';
include 'judge.php';
session_start();
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

                <p><img src="check.png" width="23px">&nbsp&nbsp<input type="text" name="sure"  autocomplete="off" value="<?= $_SESSION["sure"] ?>"></p>
                <p><img src="close.png"width="23px">&nbsp&nbsp<input type="text" name="no"  autocomplete="off" value="<?= $_SESSION["no"] ?>"></p>

                <p><img src="post-it.png"width="34px">&nbsp&nbsp
                    <input type="text" name="reg1" size="1" autocomplete="off" value="<?= $_SESSION["reg1"] ?>">
                    <input type="text" name="reg2" size="1" autocomplete="off" value="<?= $_SESSION["reg2"] ?>">
                    <input type="text" name="reg3" size="1" autocomplete="off" value="<?= $_SESSION["reg3"] ?>">
                    <input type="text" name="reg4" size="1" autocomplete="off" value="<?= $_SESSION["reg4"] ?>"></p>
                <p>Your answer -> <input type="text" name="subject" maxlength="4" autocomplete="off"></p>
                <p><input type="submit" name="submit" value="GUESS">

                    <style>
                        input {
                            padding: 5px 15px;
                            background: #89a4b0;
                            border: 0 none;
                            f cursor: pointer;
                            -webkit-border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-weight: 700;
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