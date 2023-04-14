<?php

require_once '../config.php';

$sqlOptions = "SELECT * FROM employees";
$resultOptions = mysqli_query($connection, $sqlOptions);

while($row = mysqli_fetch_assoc($resultOptions)){
	echo "<option value='".$row['employee_id']."'>".$row['first_name']." ".$row['last_name']."</option>";
}

?>