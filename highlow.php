<?php

 $number = rand(1, 100);
 
 do {
 	
 	fwrite(STDOUT, 'Guess? ');

 	$guess = trim(fgets(STDIN));

 	if ($guess > $number) {
 	
 		echo "LOWER\n";
 	}
 	elseif ($guess < $number) {
 		
 		echo "HIGHER\n";
 	}
 	else {

 		echo "GOOD GUESS!\n";
 	}
 
 } while ( $guess > $number || $number > $guess);

 /* started with the below code to make sure 
 I understood some concepts */

 // fwrite(STDOUT, 'Guess? ');

 // $guess = trim(fgets(STDIN));

 // if ($guess > $number) {
 // 	echo "string";
 // }

 // echo "What?! \n" . "Why {$guess}?\n";
 // 
 ?>