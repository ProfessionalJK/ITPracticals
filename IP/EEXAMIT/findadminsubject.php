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
$branch=$_REQUEST["branch"];
$_SESSION['branch']=$branch;
$semester=$_REQUEST["semester"];
$_SESSION['semester']=$semester;
if ($branch !== "" && $semester!=="") {
    $result=$conn->query("SELECT subjects FROM curriculam WHERE semester='$semester' AND branch='$branch'") or die("Fatal Error");
    $rows=$result->num_rows;
    for($j=0;$j<$rows;++$j)
    {
        $row=$result->fetch_array(MYSQLI_NUM);
        echo "<option value='".$row[0]."' selected>".$row[0]."</option>";
    }
} 
?>