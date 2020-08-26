<?php
@session_start();
require_once('database.php');
@$username=$_SESSION['userlogin'];
if(!isset($username))
{
    session_destroy();
    require_once('index.php');
    exit();
}
$username=$_SESSION['userlogin'];
require_once('header.php');
$result=$conn->query("SELECT * FROM students WHERE username='$username'"); 
if($result->num_rows>0)
{
    $row=$result->fetch_array(MYSQLI_NUM);
    $name=$row[0];
    $dob=$row[1];
    $gender=$row[2];
    if($gender=='M'){$gender="Male";}
    else{$gender="Female";}
    $address=$row[3];
    $reg_no=$row[4];
    $branch=$row[5];
    $class=$row[6];
    $email=$row[7];
    $mob_no=$row[8];
    $password=$row[10];
}
    
echo '<style>
#test{
    text-align:center;
    width:500px;
    border:1px solid dodgerblue;
    border-collapse:collapse;
    background:rgb(255, 209, 238);
}
#test table,th{
    margin-left:20px;
}
</style>
    <h1 align="center" style="color:tomato;font-family:monospace;font-size:2.5em;":>User Account</h1>
    <table border="1" align="center" id="test">
    <tr>
    <th>Name:</th>
    <td>'.$name.'</td>
    </tr>
    <tr>
    <th>DOB:</th>
    <td>'.$dob.'</td>
    </tr>
    <tr>
    <th>Gender:</th>
    <td>'.$gender.'</td>
    </tr>
    <tr>
    <th>Address:</th>
    <td>'.$address.'</td>
    </tr>
    <tr>
    <th>Registration No:</th>
    <td>'.$reg_no.'</td>
    </tr>
    <tr>
    <th>Branch:</th>
    <td>'.$branch.'</td>
    </tr>
    <tr>
    <th>Class:</th>
    <td>'.$class.'</td>
    </tr>
    <tr>
    <th>Email:</th>
    <td>'.$email.'</td>
    </tr>
    <tr>
    <th>Mobile No:</th>
    <td>'.$mob_no.'</td>
    </tr>
    <tr>
    <th>Username:</th>
    <td>'.$username.'</td>
    </tr>
    <tr>
    <th>Password:</th>
    <td>'.$password.'</td>
    </tr>
    </table>
';
require_once('footer.php');
?>