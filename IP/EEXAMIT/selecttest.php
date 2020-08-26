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
?>
<h2 align="center" style="color:red;">Select Test To See Results</h2>
<script>
function semname(sem,brn) {
    if (sem.length == 0) {
        document.getElementById("subopts").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("subopts").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "findadminsubject.php?branch="+brn+"&semester="+sem, true);
        xmlhttp.send();
    }
}
function testname(sub) {
    if (sub.length == 0) {
        document.getElementById("tesopts").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tesopts").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "findadmintest.php?subject="+sub, true);
        xmlhttp.send();
    }
}
</script>
<?php
echo '
<form action="viewtest.php" method="POST" text-align="center">
<table align="center">
<tr>
<th style="font-size:1.2em;padding:10px;">Branch:</th><td>
<select style="width:147px;" name="branch" id="branch">
                        <option value="">Select</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Electronics Engineering">Electronics Engineering</option>
                        <option value="Electronics and Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
                        <option value="Information Technology Engineering">Information Technology Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Masters of Computer Application">Masters of Computer Application</option>
                    </select> </td>
</tr>
<tr>
<th style="font-size:1.2em;padding:10px;">Semester:</th>
<td>
<select style="width:147px;" name="semester" id="semester" onchange="semname(this.value,branch.value)">
                        <option value="">Select</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                        <option value="VI">VI</option>
                        <option value="VII">VII</option>
                        <option value="VIII">VIII</option>
                    </select></td></tr> 
<tr><th style="font-size:1.2em;padding:10px;">Subject:</th>
    <td><select style="width:147px;" name="subjects" id="subopts"></td></tr>
<tr><th style="font-size:1.2em;padding:10px;">Test:</th>
    <td><select style="width:147px;" name="tests" id="tesopts" onfocus="testname(subopts.value)">
    <tr>
    <th colspan="2" style="text-align:center;font-size:1.2em;padding:10px;"><input type="submit" name="submit" value="Next"></input></th>
    </tr>
    </table>
    </form>'; 
require_once('footer.php');
?>