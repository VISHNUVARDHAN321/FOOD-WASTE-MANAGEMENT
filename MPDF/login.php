<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
<body >
   
    <div id="container">
        <form method="post" action="login.php">
            <h2>LOGIN</h2>
        
                <label for="id">ID NO:</label>
                <input type="text" id="id" name="id" required>

    
                <label for="password">Password:</label>
                <input type="password" id="password" name="pass" required>
                <span  id="forget">
                   <a href="">Forget password</a><br>
                </span>
            <button type="submit" name="Register" class="btn btn-primary">Login</button><br><br><br>
            Don't have account:?<a href="register.html">&nbsp;&nbsp;&nbsp;SIGNUP</a>
        </form>
    </div>


</body>


<?php
if (isset($_POST['Register'])){
$id=$_POST['id'];

$password=$_POST['pass'];


$conn=mysqli_connect('localhost','root','','ram');
$sql="SELECT * FROM usertable WHERE id='$id' and password='$password'";
$r=mysqli_query($conn,$sql);

if(mysqli_num_rows($r)>0)
{
header("Location: food14.html");

}else
{
    echo "<script> alert('Invalid id/password');</script>";
    
}
}
?>
</html>
