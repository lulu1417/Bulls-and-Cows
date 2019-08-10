<title>Bulls and Cows</title>
<?php
include 'style.css';
session_start();
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
                Answer Correct<br>Congratulations ！！
                <?="
                <script>
                    setTimeout(function(){window.location.href='restart.php';},2000);
                </script>";?>
            </div>

        </div>
    </div>

</body>
</html>