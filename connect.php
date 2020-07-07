<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

$user = stripcslashes($user);
$pass = stripcslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);

mysql_connect("localhost", "root");
mysql_select_db("test1");

$result = mysql_query("SELECT * FROM user = '$user' and pass = 'pass' ") 
          or die("Failed to query database" .mysql_error());
$row = mysql_fetch_array($result);
if($row['user'] == $user && $row['pass'] == $pass){
  
}else
{
    echo "Failed to login!";
}

?>
