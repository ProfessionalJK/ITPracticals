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
require_once('header.php');
$stud_name=$_SESSION['userlogin'];
echo '
<html>
    <head>
       
   	<link rel="stylesheet" href="style.css"/>
        </head>
    <body>
    <div class="result">
        <h1 align="center">My Results</h1>';
$result=$conn->query("SELECT * FROM user_result WHERE stud_name='$stud_name'");
$rows=$result->num_rows;

echo '<table align="center" class="viewresult" border="1"  style="width:500px;border:1px solid black;border-collapse:collapse;"><tr>
<th style="text-align:center;">Semester</th>
<th style="text-align:center;">Subject</th>
<th style="text-align:center;">Test Name</th>
<th style="text-align:center;">Marks</th>
</tr>';

for($j=0;$j<$rows;++$j)
{
    $row=$result->fetch_array(MYSQLI_ASSOC);
    $semester=$row['semester'];
    $subject=$row['subject'];
    $test_name=$row['test_name'];
    $marks=$row['mark_obtained'];
    echo '
   
    <tr>
    <td style="text-align:center;">'.$semester.'</td>
    <td style="text-align:center;">'.$subject.'</td>
    <td style="text-align:center;">'.$test_name.'</td>
    <td style="text-align:center;">'.$marks.'</td>
    </tr>
    ';
   
}
echo '
    </table>
    <br><br>
    <blockquote align="center" style="text-align:center;font-size:1.5em;color:red;">
    Total Attempts: '.$rows.'<br>
    </blockquote></div>
';

require_once('footer.php');
?>