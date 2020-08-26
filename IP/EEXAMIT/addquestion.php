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
require_once('adminheader.php');
extract($_POST);
$limit=$_SESSION['limit'];
$test_id=$_SESSION['test_id'];
if(isset($add)){
    if($qno == $limit || $qno > $limit)
    {
        $sql="INSERT INTO questions VALUES('$test_id','$qno','$question','$option1','$option2','$option3','$option4','$answer')";
        if($conn->query($sql)==TRUE)
        {
            echo "<h3 align='center' style='font-size:1.5em;'>Question No:".$qno." added successfully!!!</h3>
            <h4 align='center' style='font-size:1.5em;color:red;font-family:monospace;'>Questions Limit Exceeded.Proceed to home.</h4>";
            unset($_POST);
            unset($add);
        }
    }
    else{
        $sql="INSERT INTO questions VALUES('$test_id','$qno','$question','$option1','$option2','$option3','$option4','$answer')";
        if($conn->query($sql)==TRUE)
        {
            echo "<h3 align='center' style='font-size:1.5em;'>Question No:".$qno." added successfully!!!</h3>";
            unset($_POST);
            unset($add);
        }
    }
}
echo "
<h3 align='center' style='font-size:1.5em;color:blue;'>Add Question</h3>
<form action='addquestion.php' method='POST'>
<table align='center'>
<tr><th>Question No:</th>
<td><input type='text' name='qno'></input></td></tr>
<tr><th>Question:</th><td><input type='text' name='question'></input></td></tr>
<tr><th>Answer 1:</th><td><input type='text' name='option1'></input></td></tr>
<tr><th>Answer 2:</th><td><input type='text' name='option2'></input></td></tr>
<tr><th>Answer 3:</th><td><input type='text' name='option3'></input></td></tr>
<tr><th>Answer 4:</th><td><input type='text' name='option4'></input></td></tr>
<tr><th>Correct Answer:</th><td><input type='text' name='answer'></input></td></tr>
<tr><th colspan='2' style='text-align:center;'><input type='submit' name='add' value='Next'></input></th></tr>
</table>
</form>
";
require_once("footer.php");
?>