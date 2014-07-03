<?php
$sentence = "This is tutorial number 21";
$needle = 't';
//search the letter or word in the sentence
$search = strpos($sentence, $needle);
if ($search == false){
	echo "not find the string<br>";
}
else{
	echo "The position of the string is $search<br>" ;
}


//use for email;
$email = 'testing@hotmail.com';
$needle = '@';

$search = strpos($email, $needle);
if ($search == false){
	echo "not valid email<br>";
}
else{
	echo "valid email<br>" ;
}

?>