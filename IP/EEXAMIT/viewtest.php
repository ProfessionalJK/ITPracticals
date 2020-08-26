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
$test_id=$_POST['tests'];
$result1=$conn->query("SELECT * FROM record WHERE test_id='$test_id'");
$result2=$conn->query("SELECT MAX(marks) highest FROM record WHERE test_id='$test_id'");
$rows1=$result1->num_rows;
while($rows2=$result2->fetch_array(MYSQLI_ASSOC)){
$highscore=$rows2['highest'];
}

echo '<h3 style="text-align:center;color:blue;font-size:1.5em">Test&rsquo;s Result</h3>';
echo '<table align="center" border="1" style="width:500px;border:1px solid black;border-collapse:collapse;"><tr>
<th style="text-align:center;">Student User Name</th>
<th style="text-align:center;">Marks</th>
</tr>';
for($j=0;$j<$rows1;++$j)
{
    $row=$result1->fetch_array(MYSQLI_ASSOC);
    $stud_name=$row['stud_name'];
    $marks=$row['marks'];
    echo '
    <tr>
    <td style="text-align:center;">'.$stud_name.'</td>
    <td style="text-align:center;">'.$marks.'</td>
    </tr>
    ';
}
echo '
    </table>
    <br><br><hr>
    <blockquote align="center" style="text-align:center;font-size:1.5em;color:red;">
    Total Attempts: '.$rows1.'<br>
    High Score: '.$highscore.'<br>
    </blockquote>
';

require_once('footer.php');
?>