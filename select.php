<?php
include("config.php");
$qry="select * from stud";

$res=mysqli_query($conn,$qry);
echo "<table border=1><tr><th>id</th><td>fname</td><td>lname</td><td>address</td></tr>";

while($row=mysqli_fetch_array($res))
{
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row["fname"];
    echo "</td><tr>";
    echo $row["lname"];
    echo "</td><td>";
    echo $row["address"];
    echo "</td></tr>";
}
echo "</table>";

?>