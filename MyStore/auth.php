<?php
    $username=$_POST['userNameBox'];
    $password=$_POST['passwordBox'];
 
    $connection = mysql_connect("localhost", "root", "");
    $db = mysql_select_db("your database", $connection);
    $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
    $rows = mysql_num_rows($query);
    if ($rows == 1)
        {
            $_SESSION['login_user']=$username; // Store into session
            header("location: hello.php"); // Redirecting To Other Page
        }
    else
        {
            
        }
    mysql_close($connection); 
?>