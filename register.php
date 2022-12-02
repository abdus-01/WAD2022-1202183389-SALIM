<?php 
    $host="localhost";
    $user="root";
    $pass="";
    $db="upload_file";
   $conn= mysqli_connect($host, $user, $pass,$db);
    #mysqli_select_db($db);
    if(isset($_POST['register'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="select * from users where username ='".$username."' AND password='".$password."' limit 1 ";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            echo "<script>alert('credentials exist');</script>";
            }
            else{
                $sql="INSERT INTO users (username,password) VALUES('". $username ."','". $password ."')";
                $cor=mysqli_query($conn,$sql);
                
                if($cor){
                    echo "<script>alert('user credentials added successfully');</script>";
                header('Location: login.php');
                
                exit();
            }
            else{
                echo"<script>alert('error adding user')</script>".mysqli_error($conn);
            }
            }
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
    <button type="submit" name="register" >register</button>
    </br>
    <button type="submit" name="forgot password" >register</button>
    </br>
    

</body>

</html>
<?php mysqli_close($conn);
?>
