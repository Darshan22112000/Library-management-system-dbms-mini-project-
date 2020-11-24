<!DOCTYPE HTML>
<?php include('navbar.php'); ?>
<center><h2>Simple Library Management System</h2></center>
<br>

<?php
include("dbconnect.php");

$isbn=$_POST["isbn"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "insert into book_info(isbn,title,author,edition,publication) values('$isbn','$title','$author','$edition','$publication')"; //Insert query to add book details into the book_info table
$result = mysqli_query($db,$query);

?>

<h3> Book information is inserted successfully </h3>

<a href="searchbook.php"> To search for the Book information click here </a>

</body>
</html>