<!-- Create a PHP script with a hardcoded username and password.

Set variables like $username = "admin" and $password = "1234".

Create another sets of variable with inputUsername and inputPassword.

Check if both match, show "Login Successful", otherwise show "Invalid username or password". -->
<?php
echo "Enter username:";
$inputUsername = (string)readline();
echo "Enter password:";
$inputPassword = (string)readline();
$username = "admin";
$password = "1234";

if($inputUsername == $username){
    if($inputPassword == $password){
        echo "Login Successful";
    }
} else{
    echo "Invalid username or password";
}