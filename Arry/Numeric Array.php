﻿<?

		 # First method to create array.
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value\n";
         }
         
         # Second method to create array.
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value\n";
         }
         
         # third method to create array.
         
         $Range = range( 1, 5, 1);
         foreach( $Range as $value ) {
            echo "Value is $value\n";
         }
<?