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
$username=$_SESSION['userlogin'];
$test_id=$_SESSION['test_id'];
$branch=$_SESSION['branch'];
$semester=$_SESSION['semester'];
$subject=$_SESSION['subject'];
$limit=$_SESSION['limit'];
$test_name=$_SESSION['test_name'];
$result=$conn->query("SELECT * FROM questions WHERE test_id='$test_id'");
if($result->num_rows>0)
{
    $count=0;
    for($i=1;$i<=$limit;$i++)
    {
        $selected_ans=$_POST[$i];
        $_SESSION["'$i'"]=$selected_ans;
        $row=$result->fetch_array(MYSQLI_ASSOC);
        $answer=$row['answer'];
        $question=$row['question'];
        $result1=$conn->query("INSERT INTO user_response VALUES('$test_id','$username','$i','$question','$selected_ans')") or die("Fatal error");
        if($selected_ans==$answer)
        {
            $count+=1;
        }
    }
}

require_once('header.php');

echo '
    <h1 id="myresult" color="tomato" style="text-align:center;font-size:2em;">Test Submitted</h1>
    <h2  id="myresult1" align="center">You have scored '.$count.' out of '.$limit.'</h2>';
?>
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
$result=$conn->query("SELECT * FROM questions WHERE test_id='$test_id'");
$result2=$conn->query("SELECT * FROM user_response WHERE test_id='$test_id' AND stud_name='$username'");
echo '<form action="print.php" method="POST" target="_blank">
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
    $answer=$row[7];
    $row2=$result2->fetch_array(MYSQLI_NUM);
    $response=$row2[4];
    echo '
    <tr style="background-color:#2196F3;color:white;"><th>'.$question_no.'.&nbsp&nbsp'.$question.'</th></tr>
    <tr style="background-color:#fdf5e6;color:black;"><td>1.&nbsp&nbsp'.$option1.'</td></tr>
    <tr style="background-color:#ffdddd;color:black;"><td>2.&nbsp&nbsp'.$option2.'</td></tr>
    <tr style="background-color:#ffffcc;color:black;"><td>3.&nbsp&nbsp'.$option3.'</td></tr>
    <tr style="background-color:#ddffdd;color:black;"><td>4.&nbsp&nbsp'.$option4.'</td></tr>
    <tr><th>Your Answer: &nbsp;'.$response.'</th></tr>
    <tr><th>Correct Answer: &nbsp;'.$answer.'</th></tr>
    ';
}
echo '<tr><th><input type="submit" style="text-align:center;margin-left:225px;" value="Print"></input></th></tr></table></form></div>
';
$result=$conn->query("INSERT INTO user_result VALUES('$username','$branch','$semester','$subject','$test_id','$test_name','$limit','$count')") or die("Fatal error");
$result=$conn->query("INSERT INTO record VALUES('$username','$test_id','$count')") or die("Fatal error");
?>
<?php
require_once('footer.php');
?>