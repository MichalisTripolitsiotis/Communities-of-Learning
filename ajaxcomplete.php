<?php

$q=$_GET['q'];

$my_data=$q;

include_once('connect.php');

$sql="SELECT * FROM product WHERE name LIKE '%$my_data%' ORDER BY id LIMIT 10";

$result = mysql_query($sql) or die(mysql_error());

if($result)

{

while($row=mysql_fetch_array($result))

{

echo $row['name']."\n";

}

}

?>