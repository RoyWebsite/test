<?php

$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "Chris" and $password == "1")
{
echo "welcome to the secret website, you are in!";
}
else
{
echo "Wrong username or password";
}

?>