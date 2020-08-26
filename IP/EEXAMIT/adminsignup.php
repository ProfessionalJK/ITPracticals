<?php
@session_start();
require_once("database.php");
extract($_POST);
if(isset($submit))
{
    $sql="INSERT INTO teachers VALUES('$name','$dob','$gender','$address','$department','$email','$mob_no','$username','$password')";
    if($conn->query($sql)==TRUE)
    {
        $_SESSION['adminsignup']=$username;
        $sub="Registration Successful";
        $msg="Dear ".$name.",\nYour registration on E-Exam Portal by Department of Information Technology,FAMT has been successful.\n Please login with your username and password.";
        @mail($email,$sub,$msg);
        echo "<script>alert('Registration Successful and E-mail sent successfully');</script>";
    }
    else{
        echo "<script>alert('Registration Unsuccessful');</script>";
    }
}
require_once("adminheader.php");
@$signup=$_SESSION['adminsignup'];
if(isset($signup)){
    require_once('adminlogin.php');
    exit();
}
?>
<html>
    <head>
        <title>Admin Sign Up</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form name="adminsignupinfo" action="adminsignup.php" method="post">
        <table width="100%">
            <tr>
                <td width="30%" align="center"><img src="connected_multiple_big.jpg" width="131" height="155"></td>
                <td width="40%"><h1 id="signup">Admin Sign UP</h1></td>
                <td width="30%"></td>
            </tr>
        </table>
        <table align="center">
            <tr>
                <th>Name</th>
                <td><input type="text" name="name" required/></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><input type="date" name="dob" style="width:147px;" required/></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="radio" name="gender" value="M" checked> Male
                <input type="radio" name="gender" value="F"> Female</td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address"/></td>
            </tr>
            <tr>
                <th>Department</th>
                <td><select style="width:147px;" name="department">
                        <option value="">Select</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
                        <option value="Information Technology Engineering">Information Technology Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Masters of Computer Application">Masters of Computer Application</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td><input type="email" name="email" required/></td>
            </tr>
            <tr>
                <th>Mobile Number</th>
                <td><input type="text" name="mob_no" required/></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" name="username" required/></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password"required/></td>
            </tr>
        </table>
        <table align="center">
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
        </table>
        </form>
    </body>
</html>
<?php
require_once("footer.php");
?>