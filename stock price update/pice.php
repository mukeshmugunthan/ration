
<?php
// Fetching Values From URL
$rice2 = $_POST['rice1'];
$wheat2 = $_POST['wheat1'];
$sugar2 = $_POST['sugar1'];
$kerosene2 = $_POST['kerosene1'];
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("price", $connection); // Selecting Database
if (isset($_POST['name1'])) {
$query = mysql_query("insert into form_element(rice, wheat, sugar, kerosene) values ('$rice2', '$wheat2', '$sugar2','$kerosene2')"); //Insert Query
echo "updated succesfully";
}
mysql_close($connection); // Connection Closed
?>