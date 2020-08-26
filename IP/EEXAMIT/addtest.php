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
extract($_POST);
$creator=$_SESSION['adminlogin'];
$branch=$_SESSION['branch'];
$semester=$_SESSION['semester'];
$subject=$_SESSION['subject'];
$test_name=$_POST['test_name'];
$limit=$_POST['limit'];
$_SESSION['limit']=$limit;
$sql1="INSERT INTO test VALUES('','$test_name','$creator','$branch','$semester','$subject')";
$sql2="INSERT INTO question_limit VALUES('$test_name','$limit')";
$sql3="SELECT * FROM test WHERE test_name='$test_name' AND subject='$subject'";
if($result=$conn->query($sql1) == TRUE && $result=$conn->query($sql2) == TRUE){
        $res=$conn->query($sql3);
        $rows=$res->num_rows;
        $row=$res->fetch_array(MYSQLI_NUM);
        $_SESSION['test_id']=$row[0];
} 
else{
        echo "<script>alert('Test does not created!!!');</script>";
        exit();
}
require_once('addquestion.php');
exit();
?>