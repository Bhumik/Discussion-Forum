<?php session_start();
if(!isset($_SESSION['last']))
{
session_unset();
session_destroy();
header("location:logreg.php");
exit;
}
else
{
	if((time() - $_SESSION['last']) > 3600 )
	{	session_unset();
		session_destroy();
		header("location:logreg.php");
                exit;
	}
}


if(!isset($_SESSION["name"]))
{header("location:logreg.php");
 exit;
}


$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="forum"; // Database name

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");


?>