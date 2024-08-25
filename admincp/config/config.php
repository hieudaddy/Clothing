<?php
$mysqli = new mysqli("dbhades.mysql.database.azure.com","lehieu","Hieztlyn23","web_mysqli");
$mysqli->set_charset("utf8");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Kết nối MYSQLi lỗi: " . $mysqli -> connect_error;
  exit();
}
?>
