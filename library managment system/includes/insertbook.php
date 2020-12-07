<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2 style="font-family: cursive;"> Library Management System</h2></center>
<br>

<?php
require 'dbh.inc.php';

$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; 
$result = mysqli_query($con,$query);

?>

<h3> Book information is inserted successfully </h3>
<?php
    header("Location: ../searchBooks.html");
?>


</body>
</html>