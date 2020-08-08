<?php
session_start();
include './db.php';

$sql_connect = "SELECT * FROM user WHERE user.email='" . $_POST['mail'] . "'";

$result = $conn->query($sql_connect);

if ($result->num_rows > 0) {
  $my_user = $result->fetch_assoc();
  if($my_user['password'] == $_POST['password']){
    session_start();
    $_SESSION['user_data'] = $my_user;
    header('Location: profile.php');
  }

} else {
  echo "0 results";
}

$conn->close();

