
<?php
include "db.php";
include "judge.php";
include "style.css";
session_start();
	$guess = $_POST["subject"];
    $i = 0;
	while($i<10){

	    $i++;
    }

    $judge = new judge;
    if(!$_SESSION["answer"]){
        $ans = $_SESSION["answer"]= $judge->answer();
    }else{
        $ans = $_SESSION["answer"];
    }

    if(strlen($guess) < 4 ){
        header("location:index.php");
    }else{
        $hint = $judge->check($guess,$ans);
        $answer = implode( $ans);
        $sql = "INSERT guess(answer, guess, hint) VALUES ('$answer', '$guess', '$hint')";
        if (!mysqli_query($db, $sql)) {
            echo "insert error";
            die(mysqli_error());
        }else if($hint == "Answer Correct"){
            header("location:correct.php");
        }
        else{
            header("location:index.php");
        }
    }