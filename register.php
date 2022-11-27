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
            echo "credentials exist";
            exit();}
            else{
                $sql="insert into users usersname, password values'".$username."','".$password."'";
                echo "user credentials added successfully";
                redeirect(login.php);
                exit();
            }
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
    <input type="submit" name="submit1" value="register">
    </br>
    

</body>

</html>

