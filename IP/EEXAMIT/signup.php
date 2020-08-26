<?php
session_start();
require_once("database.php");
extract($_POST);
if(isset($submit))
{
    $sql="INSERT INTO students VALUES('$name','$dob','$gender','$address','$reg_no','$branch','$class','$email','$mob_no','$username','$password')";
    if($conn->query($sql)==TRUE)
    {
        $_SESSION['signup']=$username;
        $sub="Registration Successful";
        $msg="Dear ".$name.",\nYour registration on E-Exam Portal by Department of Information Technology,FAMT has been successful.\n Please login with your username and password.";
        @mail($email,$sub,$msg);
        echo "<script>alert('Registration Successful and E-mail sent successfully');</script>";
    }
    else{
        echo "<script>alert('Registration Unsuccessful');</script>";
    }
}
require_once("header.php");
if(isset($_SESSION['signup'])){
    require_once('index.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        
        <form name="signupinfo" action="" method="post" onSubmit="return check();">
        <table width="100%">
            <tr>
                <td width="40%" align="center"><img src="connected_multiple_big.jpg" width="131" height="155"></td>
                <td width="20%"><h1 id="signup">Sign UP</h1></td>
                <td width="40%"></td>
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
                <td><input type="radio" name="gender" value="M" checked/> Male
                <input type="radio" name="gender" value="F"/> Female</td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input type="text" name="address"/></td>
            </tr>
            <tr>
                <th>Registration Number</th>
                <td><input type="text" name="reg_no" required/></td>
            </tr>
            <tr>
                <th>Branch</th>
                <td><select style="width:147px;" name="branch">
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
                <th>Class</th>
                <td><select style="width:147px;" name="class">
                        <option value="">Select</option>
                        <option value="FE">FE</option>
                        <option value="SE">SE</option>
                        <option value="TE">TE</option>
                        <option value="BE">BE</option>
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
                <td><input type="password" name="password" required/></td>
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