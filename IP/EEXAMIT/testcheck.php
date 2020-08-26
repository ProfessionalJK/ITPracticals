<?php
require_once('database.php');
session_start();
$branch=$_SESSION['branch'];
$semester=$_SESSION['semester'];
$subject=$_SESSION['subject'];
$q=$_REQUEST["q"];
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $result=$conn->query("SELECT * FROM test WHERE test_name='$q' AND branch='$branch' AND semester='$semester' AND subject='$subject'") or die("Fatal Error");
    $data=$result->num_rows;
    if($data==0)
    {
        $hint='Testname Available';
    }
    else
    {
        $hint='Testname not available';
    }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "" : $hint;
?>