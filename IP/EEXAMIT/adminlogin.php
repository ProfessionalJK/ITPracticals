<?php
@session_start();
require_once("database.php");
extract($_POST);
if(isset($submit))
{
    $result=$conn->query("SELECT * FROM teachers WHERE username='$username' AND password='$password'");
    if($result->num_rows>0)
    {
        $_SESSION['adminlogin']=$username;
    }
    else{
        $found="N";
    }
}
require_once("adminheader.php");
@$admin=$_SESSION['adminlogin'];
if(isset($admin)){
echo '
<div class="heading">
 <h3 style="color:red; text-align:center; font-size:1.8em; " >Welcome To Admin Portal</h3></div>
<table align="center" style=" border-spacing: 1em;; font-size:1.5em;">
    <tr>
        <th><a href="newtest.php" style="color:rgb(106, 8, 207);"> Create New Test</a></th>
    </tr>
   
    <tr>
        <th><a href="selecttest.php" style="color:rgb(106, 8, 207);" align="center"> View Test Result</a></th>
    </tr>
</table>
';
require_once("footer.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        @media screen and (max-width: 800px) {
        body,header,footer {
            width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
        
    </style>
    <title>Admin Login</title>
    <meta name="keywords" content="EEXAM,ONLINE EXAM,online exam,eexamit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <div class="admin">
    <h2 style="font-size:2em;font-family:serif;text-align:center;color:tomato;" >Admin Login</h2></div>
    <form action="adminlogin.php" method="post"> 
    <table align="center">
        <tr>
            <th>Login ID</th>
            <td><input type="text" name="username"/></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center" style="color:red;"><?php
                if(isset($found)){
                    echo "Invalid Username and Password!!!";
                }
            ?></td>
        </tr>
    </table>
    <table align="center">
        <tr>
            <th><input name="submit" type="submit" value="Login"/></th>
            <th><input name="Reset" type="reset"/></th>
            <th><button type="button" onclick="location.href='adminsignup.php';"/>Sign UP</th>
        </tr>
    </table>
    </form>
</body>
</html>
<?php
require_once("footer.php");
?>