<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2> Library Management System</h2></center>
<br>

<?php
require 'dbh.inc.php';

$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "UPDATE book_info SET isbn='$isbn', title='$title', author='$author', edition='$edition', publication='$publication' WHERE isbn='$isbn';"; 
$result = mysqli_query($con,$query);

?>

<h3> Book information as updated successfully </h3>
<form action="allBooks.php" method="post" style="margin-left: 65%; margin-bottom: 10%">
    <button type="submit" name="submit">Display all books</button>
    </form>    


</body>
</html>