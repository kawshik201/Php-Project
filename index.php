<?php include("auth.php"); //include auth.php file on all secure pages ?>

<?php
$sql_query="SELECT * FROM users";
$result_set=mysql_query($sql_query);

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Books</a></p>
<a href="logout.php">Logout</a>
</div>

<?php
include_once 'dbconfig.php';
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Final Project For LICT</title>
<link rel="stylesheet" href="style.css" type="text/css" />

<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="add_data.php">add data here.</a></th>
    </tr>
    <th>Name</th>
    <th>Email</th>
	<th>Reg Time</th>
    
    <th colspan="2">Operations</th>
    </tr>
    <?php
 $sql_query="SELECT * FROM users";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[4]; ?></td>
  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.png" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png" align="DELETE" /></a></td>
        </tr>
        <?php
 }
 ?>
    </table>
    </div>
</div>

</center>


</body>
</html>