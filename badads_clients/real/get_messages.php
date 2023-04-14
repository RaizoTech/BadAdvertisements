<?php

require_once '../config.php';

// Get chat messages
$query = "SELECT * FROM messages ORDER BY timestamp ASC";
$result = mysqli_query($connection, $query);

// Display messages
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "<b>" . $row['receiver_id'] . ":</b> " . $row['content'] . "<br>";
  }
} else {
  echo "No messages";
}

?>