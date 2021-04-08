<?php

if(isset($_POST["submit"])){ 
    
 $name = $_POST["name"];
 $email = $_POST["email"];
 $username = $_POST["uid"];
 $pwd = $_POST["pwd"];
 $pwdRepeat = $_POST["pwdrepeat"];

require_once 'dbh_inc.php'; 
require_once 'functions_inc.php'; 

if(emptyInputSignUp($name, $email, $username, $pwd, $pwdRepeat) !== false) { 
   header("location: signUpPage?error=emptyinput");
   exit(); 
}

if(invalidUid($username) !== false) { 
    header("location: signUpPage?error=invalidUid");
    exit(); 
 }

if(invalidEmail($email) !== false) { 
   header("location: signUpPage?error=invalidemail");
   exit(); 
 }
if(pwdMatch($pwd, $pwdRepeat) !== false) { 
   header("location: signUpPage?error=passwordsdontmatch");
   exit(); 
  }
if(uidExists($conn, $username, $email) !== false) { 
   header("location: signUpPage?error=usernametaken");
   exit(); 
} 

createUser($conn, $name, $email, $username, $pwd); 

}
else{
    header("location: signUpPage");
    exit(); 
}

 








