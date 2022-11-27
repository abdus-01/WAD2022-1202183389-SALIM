
<?php

$host="localhost";
Suser="root";
$pass="";
$db="upload_file";
mysql_connect($host, $user, $pass);
mysql_select_db($db);


if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from users where username ='".$username."' AND password='".$password."' limit 1 ";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo "you have successfully logged in";
        redirect(index.php);
        $cookie_name = Susername;
        $cookie_value = 1;
        setcookie($cookie_name, $cookie_value, time() + (60*60), "/");
        exit();
    }else{
        echo "incorrect username and/or password";
        exit();
    }
}

if(isset($_POST['register'])==1){
    redirect(register.php);
}

?>


<!DOCTYPE html>
<html>
<head>


</head>
<body>

<form action='#' method="POST">
    username:<input type="text" name="username" placeholder="enter your user name">
    </br>
    password:<input type="password" name="password" placeholder="enter your password">
    </br>
    <input type="submit" name="submit" value="Log in">
    </br>
    <input type="submit" name="submit1" value="register">
    </br>
    

</body>

</html>

