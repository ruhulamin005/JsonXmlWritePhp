<?php
$name=$_GET["name"];
echo "Name: $name";
echo "<br>";
$username=$_GET["username"];
echo "Username: $username";
echo "<br>";
$password=$_GET["password"];
//echo "Password: $password";
//echo "<br>";
$retypepassword=$_GET["retypepassword"];
//echo "Re-type Password: $retypepassword";
if ($password == $retypepassword ){
  echo "password matched";
}
else {

  echo "password does not matched";

}
echo "<br>";
$gender=$_GET["gender"];
echo "Gender: $gender";
echo "<br>";
$programmingskills=$_GET["programmingskills"];
echo "Programming Skills: $programmingskills";
echo "<br>";
$contactno=$_GET["contactno"];
echo "Contact No: $contactno";
echo "<br>";
$email=$_GET["email"];
echo "Email: $email";
echo "<br>";
$college=$_GET["college"];
echo "College: $college";
echo "<br>";

include 'save_form.php';

 ?>
