<?php
$Host = "ec2-23-21-229-200.compute-1.amazonaws.com";
$User = "zrivsrabzsbstx";
$Password = "2e3c201adf14d2fbf560876b71251994b937f39b05e84bc9cc47328c28781b3f";
$Database = "dbpag09pb1evrf";
$Port = "5432"

// Create connection
$dbconn = new postgresqli($Host, $User, $Password, $Database, $Port);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>