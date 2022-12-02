
<?php

$host="localhost";
$user="root";
$pass="";
$db="upload_file";
$conn=mysqli_connect($host, $user, $pass,$db);
#mysqli_select_db($db);


if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="select * from users where username ='".$username."' AND password='".$password."' limit 1 ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        echo "you have successfully logged in";
        header("Location: index.php");
        $cookie_name = $username;
        $cookie_value = 1;
        setcookie($cookie_name, $cookie_value, time() + (60*60*24), "/");
        session_start();
        #if(isset())
            exit();
    }else{
        echo "<script>
        alert('wrong password and/or username');
        </script>";
       
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

<form action='' method="POST">
    username:<input type="text" name="username" placeholder="enter your user name">
    </br>
    password:<input type="password" name="password" placeholder="enter your password">
    </br>
    <button type="submit" name="login" >log in</button>
    </br>
    <h6>you do not have an account?</h6><a href="register.php"><li><i>register</i></li></a>
    </br>
    <h6>forgot password?</h6><a href="forgotpassword.php"><li><i>forgot password</i></li></a>
    </br>
    

</body>

</html>

<?php mysqli_close($conn);
?>
