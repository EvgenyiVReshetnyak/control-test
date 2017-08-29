<!DOCTYPE HTML>
<meta charset = "utf-8">

<?php

    $n = 10;    //number of questions
    $p = 7;     //correct answers
    $i = 0;     //counter

    $keys = file('keys.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);   

    foreach ($keys as $key){      
        if (in_array($key, $_GET)){
            $i++;                        
        }
    }

    if ($i < $p){
        echo "<div style=\"font:bold 18px Arial; color:red;\">Unfortunately, you didn't pass the test. Try it again!</div>";
    }
    else{
        echo "<div style=\"font:bold 18px Arial; color:green;\">Congratulations! You passed the test!</div>";
    }
?>
<p><a href="control_test.html"><< back</a></p>