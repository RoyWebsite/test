<html>
<body>
<form method="post" action="html.php">
<select name = "color">
  <option  value="black">black</option>
  <option  value="red">red</option>
  <option  value="blue">blue</option>
  <option  value="yellow">yellow</option>
</select>
<input type="submit" value="Submit the form">
</form>
<?php

echo "<B><U>This is a test </U></B>";
echo '<br>';

$name = array("a","b","c");
//use get to get the color
$color = $_POST["color"];

foreach($name as $person){
?>

<!-- use php to set color -->
<b><font color = 
<?php 
if (isset($_POST["color"])){echo $color;}
?>>
The name of the person is<?php echo $person; ?></font></b><br>

<?php
}
?>


</body>
</html>