# Travelling-Salesman-Problem-Solution-Code
This code is used to find the solution to the Travelling Salesman Problem



IMPORTANT DETAILS ABOUT PROGRAM


	'tsp_1.php' , 'tsp_2.php' , 'tsp_3.php' and 'tsp_4.php'  are the php files.  The order of execution of the php files is 'tsp_1.php' , 'tsp_2.php' , 'tsp_3.php' and then 'tsp_4.php'.  The execution of the files can be started from 'tsp_1.php'.

	The 'XAMPP' Web Server is used for executing the php files.  All the four 'php' files can be put in 'C:\xampp\htdocs' folder. 
		
	Some important properties of the program are given below.

1) The program is designed to solve for any number of vertices for the Travelling Salesman Problem for Complete graphs.

2) The number of vertices to be entered in the program can only be a positive integer which is equal to or greater than 4.

3) When a 33 vertex graph or a graph containing more than 33 vertices are given for processing to the program, errors showing 'undefined weights' and 'input values of 1000 exceeded' are given as output. This is because the default value of the constant 'max_input_vars' in php is 1000.
 
	In a 33 vertex graph, there are 1056 edges ( ie:- 33*32 = 1056 , since there are 33 vertices in the graph and there are 32 edges attached to each vertex ) or 1056 input values. 1056 is greater than 1000 and so the program will output an error since the number of input values exceed 1000.

	For eg:- if a 50 vertex graph is to be processed, then there are 2450 edges  ( ie:- 50*49 = 2450 , since there are 50 vertices in the graph and there are 49 edges attached to each vertex ) or 2450 input values. So 'max_input_vars' can be given a value higher than 2450 for eg:- 3000.  So the 'max_input_vars' constant in php can be changed by uncommenting the line 'max_input_vars=1000' and giving a value of 'max_input_vars=3000' to the 'max_input_vars' constant.  

	The 'max_input_vars' constant can be found in 'php.ini' file which is present in 'c:/xampp/php' folder.

	To verify if 'max_input_vars' has the required value, the function 'phpinfo()' can be typed in any empty php file and the file executed. This information displayed after execution of the 'phpinfo()' function will contain the value of 'max_input_vars' along with other information that the function will display.

4) Vertex names should begin with an english alphabet. The rest of the name should contain a combination of english alphabets or positive integer numbers or a combination of both english alphabets and positive integer numbers only. No other type of characters are allowed to be used in the vertex name.

5) Each vertex name should be different from every other vertex name. No two or more vertices should have the same name.

6) Only positive integers should be used for the weight values of the edges.

7) No edge should have a weight with a value of 0.

8) In tsp_4.php , in line no 3 and line no 4, the following code is given. The code is as follows :-

ini_set('memory_limit', '1024M');     
ini_set('max_execution_time', 10800);

	The above code will become necessary when the number of vertices increases. This code is for increasing the processing memory and for increasing the execution time limit. If this code is not there, then sometimes php will stop program execution with error messages.  For eg:- if the processing time exceeds 30 seconds, then php will automatically stop execution after 30 seconds, since 30 seconds is the default value given in php. To prevent this, the code 'ini_set('max_execution_time', 10800);' is given.

9) Also for the code '<?php session_start(); ?>', ( present at the very beginning of a php file ) please note that there should not be a space or even an empty line above this code if any code modification is made in the php file. Even if there is a single space before this line of code, the error of 'header output already sent' is most likely to be shown. So please make sure that this code (ie:- the code included between the apostrophies ie:- '<?php session_start(); ?>') is present at the very beginning of the code file, without even a single space preceeding this line of code.

