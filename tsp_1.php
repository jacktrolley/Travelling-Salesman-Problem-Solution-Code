<?php
session_start();
?>



<html>

<head>
</head>



<body>

<form name='form_1' method='post' action = 'tsp_2.php'>

PLEASE INPUT THE NUMBER OF VERTICES IN THE GRAPH: 

<br/><br/>
( For eg:- if there are 5 vertices in a graph , then please type 5 in the input box given below and press 'Submit' button ).
<br/><br/>

VERY IMPORTANT :- AS EACH FORM IS PROCESSED AND IF SOME PHP COMPILER ERROR MESSAGES ARE SHOWN WHICH IS NOT EASILY UNDERSTOOD, THEN IT IS BETTER TO START THE PROGRAM AGAIN AFRESH AS FROM THIS PAGE RATHER THAN PRESSING THE BACK BUTTON ON THE BROWSER USING THE SAME DATA AGAIN, WHERE THE OLD DATA MIGHT NOT BE CORRECT DATA. THIS PROGRAM IS DESIGNED FOR PROCESSING ANY NUMBER OF VERTICES OF THE TRAVELLING SALESMAN PROBLEM FOR COMPLETE GRAPHS.  

<br/><br/>

<input type='text' name='no_of_vertices' value="" />


<input type="submit" name="button_1" value="Submit";/>
</form>


</body>


</html>



<?php


?>