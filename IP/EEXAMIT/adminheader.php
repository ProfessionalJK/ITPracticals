<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
<body>
<header>
		<table class="header" cellspacing="0" cellpadding="0">
			<tr height="150px">
				<td width="30%"><img src="famt icon.png" width="300" height="80" align="left"></td>
				<td align="center" width="40%"><p><h1>Department of Information Technology</h1>
				<h2>Online Examination Portal</h2></p></td>
				<td width="30%"><img src="logo.png" align="right"></td>
			</tr>
		</table>
		<table width="100%">
            <tr>
                <td>
                    <?php 
                        @$_SESSION['adminlogin']; 
                        error_reporting(1);
                    ?>
                </td>
                <td>
	                <?php
	                    if(isset($_SESSION['adminlogin'])){
	                        echo '<div align="right" class="admin"><strong><a href="adminlogin.php"> Home </a> | <a href="adminaccount.php">My Account</a> | <a href="signout.php">Signout</a></strong></div>';
	                    }
	                    else{
	 	                    echo "&nbsp;";
	                    }
	                ?>
	            </td>
	       </tr>
        </table> 
</header>
</body>
</html>