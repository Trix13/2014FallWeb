<!DOCTYPE HTML>
<html>
	<h1>Assignment 11</h1>
	<?php
		$one = "WOOOOOO";
		echo "Question 1". "<br>". $one;
		echo "<br>";
		echo "Question 2";
		$outp= "X = ";
		$outp3 = " is not divisible by 3 and the remainder is ";
		$x = 5;
		$y = 1;
		echo "<br>";
		echo $outp. $x;
		echo "<br>";
		echo "Question 3";
		echo "<br>";		
		$rand = rand(0, 20);
		$answ = $rand / 3;
		if($rand % 3){
			echo $rand. $outp3. $answ;
		}else{
			echo $rand. " is divisable by 3 and is ". $answ;
		}
		echo "<br>";
		while($y!=11){
			echo $y. "<br>";
			$y++;
		}
		echo "Question 4";		
		$y--;
		echo "<br>";		
		while($y!=0){
			echo $y. "<br>";
			$y--;			
		}
	?>
</html>