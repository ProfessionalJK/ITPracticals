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
extract($_POST);
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$test_id=$_POST['test'];
$_SESSION['branch']=$branch;
$_SESSION['semester']=$semester;
$_SESSION['subject']=$subject;
$_SESSION['test_id']=$test_id;
$username=$_SESSION['userlogin'];
$result=$conn->query("SELECT * FROM test WHERE id='$test_id' AND branch='$branch' AND subject='$subject' AND semester='$semester'");
if($result->num_rows>0)
{
    $row=$result->fetch_array(MYSQLI_NUM);
    $testname=$row[1];
}
$_SESSION['test_name']=$testname;
$result=$conn->query("SELECT * FROM user_result WHERE stud_name='$username' AND test_id='$test_id'");
if($result->num_rows>0)
{
    echo '<script>alert("You have already given the test.")</script>';
    require_once('index.php');
    exit();
}
require_once('header.php');
$result=$conn->query("SELECT * FROM question_limit WHERE test_name='$testname'");?>
<html>
<head>
<style>
.questions table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

.questions td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
</style>
</head>
<?php
if($result->num_rows>0)
{
   $row=$result->fetch_array(MYSQLI_NUM);
   $limit=$row[1];
   $_SESSION['limit']=$limit;
}
echo '
    <h1 align="center" class="start" style="color:tomato;font-size:2em;">'.$testname.'</h1>
';
$result=$conn->query("SELECT * FROM questions WHERE test_id='$test_id'");
echo '
    <form action="check.php" method="POST">
    <table class="questions" align="center" border="1" style="border-collapse:collapse;border:1px sloid black;width:500px;">
';
for($i=0;$i<$limit;$i++)
{
    $row=$result->fetch_array(MYSQLI_NUM);
    $question_no=$row[1];
    $question=$row[2];
    $option1=$row[3];
    $option2=$row[4];
    $option3=$row[5];
    $option4=$row[6];
    echo '
    <tr style="background-color:#2196F3;color:white;"><th>'.$question_no.'.&nbsp&nbsp'.$question.'</th></tr>
    <tr style="background-color:#fdf5e6;color:black;"><td><input type="radio" name="'.$question_no.'" value="'.$option1.'">'.$option1.'</input></td></tr>
    <tr style="background-color:#ffdddd;color:black;"><td><input type="radio" name="'.$question_no.'" value="'.$option2.'">'.$option2.'</input></td></tr>
    <tr style="background-color:#ffffcc;color:black;"><td><input type="radio" name="'.$question_no.'" value="'.$option3.'">'.$option3.'</input></td></tr>
    <tr style="background-color:#ddffdd;color:black;"><td><input type="radio" name="'.$question_no.'" value="'.$option4.'">'.$option4.'</input></td></tr>
    ';
}
echo '</table><table align="center"><tr><th><input type="submit" name="submit" value="Submit"></input></th></tr></table>
    </form>
';
require_once('footer.php');
?>