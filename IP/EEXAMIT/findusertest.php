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
$branch=$_SESSION['branch'];
$semester=$_SESSION['semester'];
$subject=$_REQUEST['subject'];
if($branch!=="" && $semester!==""){
$result=$conn->query("SELECT * FROM test WHERE branch='$branch' AND semester='$semester' AND subject='$subject'");
$rows=$result->num_rows;
for($j=0;$j<$rows;++$j)
{
    $row=$result->fetch_array(MYSQLI_NUM);
    echo '<option value="'.$row[0].'" selected>'.$row[1].'</option>';
}
}
?>