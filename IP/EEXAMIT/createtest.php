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
$branch=$_POST['branch'];
$semester=$_POST['semester'];
$subject=$_POST['subjects'];
$_SESSION['branch']=$branch;
$_SESSION['semester']=$semester;
$_SESSION['subject']=$subject;
?>
<script>
function showtestname(str) {
    if (str.length == 0) {
        document.getElementById("status").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("status").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "testcheck.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
<?php
require_once('adminheader.php');
echo "
<h2 align='center' style='color:red;'>New Test</h2>
<form action='addtest.php' method='POST'>
<table align='center' style='width:500px;'>
<tr>
<th style='width:33%;'>Test Name:</th>
<td style='width:34%;'><input type='text' name='test_name' onblur='showtestname(this.value)'></input></td>
<td style='width:33%;color:green;'><span id='status'>Availability</span></td>
<tr>
<th style='width:33%;'>No. Of Questions:</th>
<td style='width:34%;'><input type='text' name='limit'></input></td>
<tr><td colspan='3' align='center'><input type='submit' name='submit1' value='Next'></input></td>
</tr>
</table>
</form>
";
require_once('footer.php');
?>