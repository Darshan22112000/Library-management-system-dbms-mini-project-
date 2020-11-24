

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

<td><?php echo $row["Title"];?> </td>
<td><?php echo $row["Author"];?> </td>
<td><?php echo $row["Edition"];?> </td>
<td><?php echo $row["Publication"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No books found in the library by the name $search </center>" ;
?>
</table>


<form action="updatepass.php" method="post">

<table border="2" align="center" cellpadding="5" cellspacing="5">
    <tr>
        <td> ISBN </td>
        
        <td><pre><input type="text" name="isbn" value="<?php echo $isbn ?>" readonly> </pre> </td>
    </tr>
<tr>
<td> Enter Title :</td>
<td> <input type="text" name="title" size="48"> </td>
</tr>
<tr>
<td> Enter Author :</td>
<td> <input type="text" name="author" size="48"> </td>
</tr>
<tr>
<td> Enter Edition :</td>
<td> <input type="text" name="edition" size="48"> </td>
</tr>
<tr>
<td> Enter Publication: </td>
<td> <input type="text" name="publication" size="48"> </td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" value="submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>