<?php
  include_once '../Database/init.php';
 $sql="CREATE TABLE cars (
    id_car int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id int(11) NOT NULL,
    carname varchar(100) COLLATE utf8_unicode_ci NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user_info(user_id)
  )";
  
  if ($con->query($sql) === TRUE) {
    echo "Table Cars created successfully";
  } else {
    echo "Error creating table: " . $con->error;
  }
  $con->close();
?>