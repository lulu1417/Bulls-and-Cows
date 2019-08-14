<title>Login</title>
<?php
include 'style.html';
?>
<body>
     <div class="flex-center position-ref full-height">
                <div class="top-right home">
                    <a href="restart.php">Restart</a>
                    <a href="rank.php">RANK</a>
                </div>
      <div class="login">
                <div class="m-b-md">
                    <body OnLoad="document.login.name.focus();">
                    <form name="login" action="main.php" method="post">
                        <p><strong>Enter your name  <input type=text name="name" autocomplete="off"></p>
                        <p><input type="submit" name="submit" value="Start">
                    <style>
                        input {padding:5px 15px; background:#ccc; border:0 none;
                        cursor:pointer;
                            font-weight: 900;
                        -webkit-border-radius: 5px;
                        border-radius: 5px; }
                    </style>
                    <style>
                        input {
                            padding:5px 15px;
                            background:#89a4b0;
                            border:0 none;f
                            cursor:pointer;
                            -webkit-border-radius: 5px;
                            border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-size: 19px;
                        }
                    </style>
                    </form>
                </div>

</body>
</html>



