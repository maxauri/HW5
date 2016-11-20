<?php
$_GET['yy']='yy'; 
switch (TRUE){       // the TRUE is the trick 
	case (isset($_GET['xx'])): 
        	echo "do this"; 
       		break; 
        case (isset($_GET['yy'])): 
	  	 echo "do that"; 
	      	 break; 
	default: 
	         echo "nothing set!"; 
}
?>
