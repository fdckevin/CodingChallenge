<?php
	
	$length = 5;
	
	for($i=1; $i<=$length-1; $i++) {
	  
	  for($j=$length - $i; $j >= 0; $j--) {
	    
	    echo "-";
	  }
	  
	  for($k=1; $k<=$i; $k++) {
	    echo " *";
	  }
	  echo "\n";
	}
	
		for($i=$length; $i>=1; $i--) {
	  
	  for($j=$length - $i; $j >= 0; $j--) {
	    
	    echo "-";
	  }
	  
	  for($k=1; $k<=$i; $k++) {
	    echo " *";
	  }
	  echo "\n";
	}
?>