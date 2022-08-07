<?php
require_once "../model/db_conn_news.php";

$sql = "SELECT Name,News1,News2,News3,News4,News5	
FROM Allnews WHERE Name = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($name, $news1, $news2, $news3, $news4, $news5);
$stmt->fetch();
$stmt->close();
echo "<br>";
echo "News category : ". $name."<br><br><br><br>";
echo "First News : ".  $news1."<br><br>";
echo "Second News : ".  $news2."<br><br>";
echo "Third News : ".  $news3."<br><br>";
echo "Fourth News : ".  $news4."<br><br>";
echo "Fifth News : ".  $news5."<br><br>";
?>