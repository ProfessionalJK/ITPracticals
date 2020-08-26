<?php
@session_start();
require_once("database.php");
extract($_POST);
if(isset($submit))
{
    $result=$conn->query("SELECT * FROM students WHERE username='$login_id' AND password='$password'");
    if($result->num_rows>0)
    {
        $_SESSION['userlogin']=$login_id;
    }
    else{
        $found="N";
    }
}
require_once("header.php");
@$user=$_SESSION['userlogin'];
if(isset($user)){
echo '        <div class="text">
            <h1 align="center">Welcome To Online Exam</h1><br></div>
            <table align="center" cellpadding="20px" cellspacing="20px">
                <tr>
                
                    <td><img src="HLPBUTT2.JPG" alt="Image not found"></td>
                    <td><a href="subjectselect.php"><b>Subject For Quiz</b></a><br></td>
                </tr>
                <tr>
                 
                    <td><img src ="DEGREE.JPG" alt="Image not found"></td>
                    <td><a href="result.php"><b>Result</a></b><br></td>
                </tr>
            </table>
       ';
require_once("footer.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
     
	<title>Departmental Online Examination of IT,FAMT</title>
	<meta name="keywords" content="EEXAM,ONLINE EXAM,online exam,eexamit">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css"/>
	<link rel="icon" href="favicon.io" type="image/gif" sizes="16x16"> 
</head>
<body>
    <div>
    <table  width="70%" align="left" cellspacing="10px">
                         <tr>
                                <td width="60%" valign="center" align="center" class="index1"><h1>Welcome to Online Examination Portal</h1>
		                      	<span><img src="paathshala.jpg" width="129" height="100">
			                     <span><img src="HLPBUTT2.JPG" width="50" height="50"><img src="BOOKPG.JPG" width="43" height="43"></span></span>
		                       	<blockquote>Welcome to Online examination portal of Department of IT, FAMT. This Site will provide the quiz for various subject                                                            of interest.You need to login for taking the online exam. </blockquote>
		                     	</td>
                          </tr>
     </table></div>
     
          
   
   <table width="30%" class="right" align="center" >
         <tr><td><br><br><br></td></tr>
         <tr> <td  align="center" id="index1" bgcolor="tomato"><b>User Login</b></td>  </tr> 
         <tr><td width="30%"><form name="userlogin" method="post" action="index.php">
				<table  align="center" cellpadding="3px" cellspacing="3px">
					<tr>
						 <td>Login ID</td>
						 <td><input type="text" name="login_id"></td>
					</tr>
					<tr>
						 <td>Password</td>
						 <td><input type="password" name="password"></td>
					</tr>
                              
                    <tr>
						<td colspan="2" align="center" class="errors">
						<?php
						if(isset($found))
		                      {
		  	                    echo "<h4>Invalid Username or Password</h4>";
		                       }?>
					
		                 </td >
		            </tr>
                       <tr>
          				   <td colspan="2" align="center" class="errors">
		  				   <input name="submit" type="submit" id="submit" value="Login"></td>
        			    </tr>
        		</table>
        	  
                 <table align="center" width="100%" >
        			<tr>
        				  <td align="center" bgcolor="tomato"><b>New User?</b>&nbsp;<a href="signup.php"                                                                                    style="color:blue;">Sign Up</a></td>
                   </tr>
                   </table>
			</form>
		  </td>
		</tr>
			
    </table>
	
	
</body>
</html>
<?php
	require_once("footer.php");
	?>