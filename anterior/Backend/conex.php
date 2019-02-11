<?php
function conexion() {
  $db_username="womenit2018";
  $db_password="womenit2018.!";
  $db_host="148.220.52.120";
  $db_name="womenit";

  $link = new mysqli($db_host, $db_username, $db_password, $db_name);
  $link->set_charset("utf8");
  if ($link->connect_errno > 0) {
    return "Error conexion";
  } else {
    return $link;
  }
}
 ?>
