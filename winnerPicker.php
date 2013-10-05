<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $familyNames = array();
    array_push($familyNames, "Ben" );
    array_push($familyNames, "Steph" );
    array_push($familyNames, "Betsy" );
    array_push($familyNames, "Cari" );
    array_push($familyNames, "Nate" );
    array_push($familyNames, "Mom" );
    array_push($familyNames, "Dad" );
	// Sort the list
    sort($familyNames);
    
    
	// Randomly select a winner!
    $winner = rand(0, count($familyNames)-1);
	// Print the winner's name in ALL CAPS
	echo strtoupper($familyNames[$winner]);
	?>
	</p>
</html>
