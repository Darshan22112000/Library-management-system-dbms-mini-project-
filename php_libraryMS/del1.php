<?php
function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(newurl) {';
    echo '  if (confirm("Are you sure you want to delete this book??")) {';
    echo '    document.location =newurl ;';
    echo '  }';
    echo '}';
    echo '</script>';
}
?>
<!DOCTYPE HTML>
<?php include('navbar.php'); ?>
<?php
createConfirmationmbox();
?>
<center><h2>Simple Library Management System</h2></center>

<center><h3>NOTE : Once you click delete the book will be permanently deleted...</h3></center>
<form action = "del2.php" method="get">
<br>
<center>Enter the ISBN of the book to be deleted :
<input type="text" name="search" size="48">
<br></br>


<button type="" action="javascript:openurl('del2.php')">delete</button>

<input type="reset" value="Reset">
</center>
<br>
</form>
</body>
</html>

