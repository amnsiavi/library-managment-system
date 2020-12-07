<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2> Library Management System</h2></center>
<br>

<?php
require 'dbh.inc.php';

$del = $_REQUEST["delete"];

$query = "DELETE from book_info where isbn like '%$del%'"; 
mysqli_query($con,$query);
if(mysqli_query($con,$query)){
    echo "<h1>Book Deleted Sucessfully </h1>"; 
    echo "<h2> Redirecting to previous page </h2>";
    sleep(5);
    header("Location: ../deleteBook.html");
    
}
else{
    echo "book was not deleted sucessfully";
}
?>
    
</body>
</html>
