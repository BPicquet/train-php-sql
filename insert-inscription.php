<?php
include './db.php';

$sql_insert_request = "INSERT INTO user (username, password, email) VALUES ('" . $_POST['username'] . "','" .  $_POST['password'] . "','" . $_POST['mail'] . "')";


/* Envoie à la base donnée et check la réponse du serveur */
if ($conn->query($sql_insert_request) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql_insert_request . "<br>" . $conn->error;
  }



/*
$sql = "SELECT * FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    print_r($row);
  }
} else {
  echo "0 results";
}
*/

$conn->close();


