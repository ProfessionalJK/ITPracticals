<?php
@session_start();
require_once('database.php');
@$username=$_SESSION['adminlogin'];
if(!isset($username))
{
    session_destroy();
    require_once('adminlogin.php');
    exit();
}
$branch=$_SESSION['branch'];
$semester=$_SESSION['semester'];
$subject=$_REQUEST['subject'];
$creator=$_SESSION['adminlogin'];
if($branch!=="" && $semester!==""){
$result=$conn->query("SELECT * FROM test WHERE branch='$branch' AND semester='$semester' AND subject='$subject' AND creator='$creator'");
$rows=$result->num_rows;
for($j=0;$j<$rows;++$j)
{
    $row=$result->fetch_array(MYSQLI_NUM);
    echo '<option value="'.$row[0].'" selected>'.$row[1].'</option>';
}
}
?>