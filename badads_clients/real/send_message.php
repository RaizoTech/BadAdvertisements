<?php

require_once '../config.php';

// Get message data
$myID = $_POST['client-id-messengger'];
$username = $_POST['receiver-identification'];
$message = $_POST['message-ko'];

// Insert message into database
$query = "INSERT INTO messages(sender_id, receiver_id, content) VALUES ('$myID', '$username','$message')";
$result = mysqli_query($connection, $query);

if($result) {
  echo "Message sent successfully";
} else {
  echo "Error sending message";
}

?>