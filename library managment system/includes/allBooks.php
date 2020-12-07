<html>
<body bgcolor="87ceeb">
<center><h2 style="font-family: cursive;">Library Management System</h2></center>
<br>

<?php
require 'dbh.inc.php';



$query = "select * from book_info"; 
$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)

{
?>

<table border="2" align="center" cellpadding="5" cellspacing="5">

<tr>
<th> ISBN </th>
<th> Title </th>
<th> Author </th>
<th> Edition </th>
<th> Publication </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["isbn"];?> </td>
<td><?php echo $row["title"];?> </td>
<td><?php echo $row["author"];?> </td>
<td><?php echo $row["edition"];?> </td>
<td><?php echo $row["publication"];?> </td>
</tr>
    
<?php
}
}

?>
</table>
</body>
</html>
<br>
