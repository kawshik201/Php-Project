<?php
include_once 'dbconfig.php';
if(isset($_GET['edit_id']))
{
 $sql_query="SELECT * FROM users WHERE user_id=".$_GET['edit_id'];
 $result_set=mysql_query($sql_query);
  $fetched_row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE users SET username='$username',email='$email',password='$password' WHERE user_id=".$_GET['edit_id'];
        mysql_query($sql_query));
 // sql query for update data into database 
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Final Project For LICT</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="body">
 <div id="content">
    <form method="post"><
    <table align="center">
    <tr>
    <td><input type="text" name="username" placeholder="User Name" value="<?php echo $fetched_row['username']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="email" placeholder="Email" value="<?php echo $fetched_row['email']; ?>" required /></td>
    </tr>
    <tr>
    <td><input type="text" name="password" placeholder="Password" value="<?php echo $fetched_row['password']; ?>" required /></td>
    </tr>
    <tr>
    <td>
    <button type="submit" name="btn-update"><strong>UPDATE</strong></button>
    </td>
    </tr>
    </table>
    </form>
    </div>
</div>

</center>
</body>
</html>