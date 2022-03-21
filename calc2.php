<?php
	header('Content-type: text/html; charset=utf-8');
	$num = $_GET['x'];
	$num2 = $_GET['y'];
	$move = $_GET['d'];
	switch ($move) {
    	case '+':
        	$sum = $num + $num2;
			echo $num, "+", $num2, " = ", $sum;
        	break;
    	case '-':
        	$sum = $num - $num2;
			echo $num, "-", $num2, " = ", $sum;
       		break;
    	case '*':
        	$sum = $num * $num2;
			echo $num, "*", $num2, " = ", $sum;
        	break;
    	case '/':
        	$sum = $num / $num2;
			echo $num, "/", $num2, " = ", $sum;
        	break;
	}
?>