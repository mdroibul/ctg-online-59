<?php 
	/*HOMEWORK QUESTION NO-1, PRINTED FULL NAME.*/

	$firstname = "Md. Robiul";
	$lastname = " Islam";
	echo "<p>Homework No_1</p>";
	echo $firstname. $lastname ;
 ?>

<br> 
<br> 
<br>

 <?php
 	/*HOMEWORK QUESTION NO-2, PRINTED FULL NAME.*/

 	$gretings = " Welcome To CodersTrust";
 	echo "<p>Homework No_2</p>";
	echo str_replace("To CodersTrust", "Md. Robiul Islam", "$gretings");
?>

<br> 
<br> 
<br>

 <?php
 	/*HOMEWORK QUESTION NO-3, PRINTED FULL NAME.*/

 	echo "<p>Homework No_3</p>";
	echo str_replace(" ", ",","Md Robiul Islam");
?>

<br> 
<br> 
<br> 

<?php 

 	/*HOMEWORK QUESTION NO-3, PRINTED FULL NAME.*/

 	echo "<p>Homework No_3</p>";

	$username = "Md Robiul Islam";

	$split_name = explode(" ", $username);

	print_r( implode(",", $split_name ));


 ?>

<br> 
<br> 
<br> 

<?php
	/*HOMEWORK QUESTION NO-4, PRINTED FULL NAME*/
	echo "<p>Homework No_4</p>";
	$num1=20;
	$num2=15;
	$num3=22;
    if($num1>$num2 && $num1>$num3){
        echo $num1;
      }
      else{
        if($num2>$num1 && $num2>$num3){
          echo $num2;
        }
        else
          echo $num3;
      }

?>


<br> 
<br> 
<br>

<?php

	/*HOMEWORK QUESTION NO-5, */
	echo "<p>Homework No_5</p>";

	$num = 15;

	$res = $num % 2;

	if($res == 0){
				echo "THIS IS EVEN";
	}else{
		echo "THIS IS ODD";
	}

 ?>