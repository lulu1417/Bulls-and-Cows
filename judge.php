<?php
	class judge

    {
        public $MAX_LENGTH = 4;
        function answer()
        {
                $i = 0;
                while ($i < $this->MAX_LENGTH) {
                    $ans[$i] = rand() % 10;
                    $i++;
                }
                return $ans;
        }

        function check($guessString, $ans){
            $guess = str_split ( $guessString);
            $A = 0;
            $ans_appear_times[10] = array();
            $guess_appear_times[10] = array();
    //calculate A
        for($i=0; $i< $this->MAX_LENGTH; $i++) {

        if($guess[$i] == $ans[$i]) {
            $A++;
        }
        else {
            $ans_appear_times[$ans[$i]]++;
            $guess_appear_times[$guess[$i]]++;
        }
    }
    //calculate B
    $B = 0;
    for($i=0; $i<10; $i++) { //4404 1345
        if($guess_appear_times[$i] >= $ans_appear_times[$i]) {
            $B += $ans_appear_times[$i];
        }
        else {
            $B += $guess_appear_times[$i];
        }
    }
    if($A==$this->MAX_LENGTH && $B==0)	{
        return "Answer Correct";
    }

    $hint = $A."A".$B."B";

    return $hint;
        }
    }

	