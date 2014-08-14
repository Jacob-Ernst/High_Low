<?php

 
 if ($argc == 3 ) {
  	
  	$numba1 = $argv[1];
  	$numba2 = $argv[2];
  	$number = rand("$numba1", "$numba2");
  }

 else {

 	$number = rand(1, 100);
 } 
 
 do {
 	
 	fwrite(STDOUT, 'Guess? ');

 	$guess = trim(fgets(STDIN));

 	if (! is_numeric($guess)) {
 	
 		echo "YOU NOOB!!!\n";
 	}
 	elseif ($guess > $number) {
 		echo "LOWER\n";
 	}

 	elseif ($guess < $number) {
 		
 		echo "HIGHER\n";
 	}
 	elseif ($guess = $number) {

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