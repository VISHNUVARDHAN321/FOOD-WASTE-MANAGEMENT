<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" type="text/css" href="register.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
</head>
<body>
    <div id="container">
        <form method="post" action="connect.php">
            <h2>Register</h2>
           
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="enter your name" required>
        
                <label for="id">ID NO:</label>
                <input type="text" id="id" name="id" placeholder="enter your id" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="enter your email" required>
        
         
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" placeholder="enter password" required>
           
            
                <label for="phone_no">Phone No:</label>
                <input type="phone_no" id="phone_no" name="cpass" placeholder="enter phone number" required>
         
            <button type="submit" name="Register" class="btn btn-primary">Register</button><br><br>
            You already have an account <a href="login.html">LOGIN</a>
        </form>
    </div>
    <?php
    $conn=mysqli_connect('localhost','root','','ram');
if($conn)
{
    echo "connected successfully" ;
}else{
    die( "not conected". mysqli_connect_error());
}
if (isset($_POST['Register'])){
$username=$_POST['username'];
$id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];


$sql="INSERT INTO usertable(username,id,email,password,phone) VALUES('$username','$id','$email','$password','$cpassword')";
$r=mysqli_query($conn,$sql);
if($r)
{

    echo "<script> alert('Successfully created your account');</script>";
    echo "<script> window.open('login.html','_self')</script>";
}else
{
    echo "<script> alert('Please try again later');</script>";
    echo "<script> window.open('signup.html','_self')</script>";
}
}
?>
</body>
</html>
