

<!DOCTYPE HTML>
<?php include('navbar.php'); ?>
<center><h2>Simple Library Management System</h2></center>
<!--Once the form is submitted, all the form data is forwarded to InsertBooks.php -->

<?php
include("dbconnect.php");

$search = $_REQUEST["search"];

$query = "select ISBN,Title,Author,Edition,Publication from book_info where ISBN like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

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
<td><?php echo $row["ISBN"];
$isbn=$row["ISBN"];
?> </td>

<td><?php echo $row["Title"];
        $title=$row["Title"];
        ?> </td>
<td><?php echo $row["Author"];
$author=$row["Author"];
?> </td>
<td><?php echo $row["Edition"];
$edition=$row["Edition"];
?> </td>
<td><?php echo $row["Publication"];
$publication=$row["Publication"];
?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>

<?php

$query1 = "delete from book_info where ISBN='$isbn' "; //Insert query to add book details into the book_info table
$result1 = mysqli_query($db,$query1);

?>

<h3> Book is deleted successfully </h3>

</body>
</html>