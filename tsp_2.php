<?php
session_start();
?>


<?php
$no_of_vertices = trim($_POST['no_of_vertices']);

$input_pattern = '/^[1-9]{1}[0-9]*$/';
$input_counter = preg_match_all($input_pattern,trim($_POST['no_of_vertices']));
if($input_counter == 0)
{
echo "<br/>STOPPING SCRIPT DUE TO ERROR IN INPUT VALUES. ONLY POSITIVE INTEGER NUMBERS ARE ALLOWED FOR INPUT. INPUT VALUES CANNOT BE 0<br/>";
echo "<br/>PLEASE GO BACK TO PREVIOUS PAGE AND TYPE IN CORRECT VALUES.<br/>";
exit();
}

if($no_of_vertices < 4)
{
echo "<br/>STOPPING SCRIPT DUE TO ERROR IN INPUT VALUES. ONLY POSITIVE INTEGER NUMBERS GREATER THAN OR EQUAL TO 4 ARE ALLOWED FOR INPUT VALUES.<br/>";
echo "<br/>PLEASE GO BACK TO PREVIOUS PAGE AND TYPE IN CORRECT VALUES.<br/>";
exit();
}

$count = $no_of_vertices;
$_SESSION['num_of_vertices'] = $no_of_vertices // note here there is slight spelling change of variable names.
?>


<html>

<head>
</head>



<body>

<form name='form_2' method='post' action = 'tsp_3.php'>

PLEASE ENTER THE VERTEX NAMES :
<br/><br/>
VERY IMPORTANT (PLEASE NOTE):- 
<br/>
<br/>
1) Vertex names should begin with an english alphabet only( It can be a small letter or capital letter). The vertex names can contain only english alphabets or integer numbers. No other type of characters are allowed in the vertex names. Most importantly 'spaces', the comma (',') and the hash symbol ('#') are 'NOT' allowed in the vertex names. For eg:- 'Los Angeles' should only be written as 'LosAngeles' ( Note that apostrophies should not be included in names. The apostrophie is only shown here in order to clearly demarcate the name from the rest of this sentence. ) and should not be written as 'Los#Angeles' or 'Los Angeles' or as 'Los,Angeles'. Also some examples of valid names are 'a1' , 'a' , 'b2a' and 'cbd345'. Please note that apostrophe should not be included in vertex names as given in the example above ie:- only a1 should be written as input and not 'a1'. That is apostrophies should never be present in vertex names.
<br/>
<br/>
2) EACH VERTEX NAME SHOULD BE DIFFERENT FROM ALL THE OTHER VERTEX NAMES. IF AT LEAST 2 OR MORE VERTEX NAMES ARE GIVEN THE SAME NAMES, PHP ERROR MESSAGES OF THE TYPE OF 'UNDEFINED OFFSET' AND 'UNDEFINED INDEX' ERRORS WILL OCCUR WHEN THE PROGRAM EXECUTES.
<br/><br/>
After typing all the vertex names, press 'Submit' button.
<br/><br/>

<table border=1>

<?php

for($i=0;$i<$count;$i++)
{
?>

<tr>
<td>
Vertex <?php echo ($i+1); ?> &nbsp;&nbsp;
</td>
<td>
<input type="text" name="vertex_<?php echo $i; ?>" value="" />
</td>
</tr>

<?php
}

?>

</table>


<br>

<input type="submit" name="button_2" value="Submit";/>

</form>


</body>


</html>



