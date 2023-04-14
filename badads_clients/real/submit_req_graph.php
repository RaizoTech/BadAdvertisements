<?php

require_once '../config.php';

function validate($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$client_identification = validate($_POST['client-identification']);
$product_name = validate($_POST['product-name']);
$name_request = validate($_POST['name-set']);
$base_color = validate($_POST['base-color-req']);
$brand_name = validate($_POST['brand-cid-req']);
$tor = 'Graphics';
$status = 'Pending';

$length = 10; // Change this to set the length of the random string
$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomString = '';

for ($i = 0; $i < $length; $i++) {
   $randomString .= $characters[rand(0, strlen($characters) - 1)];
}

if($_FILES['assets-image']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['assets-image']['tmp_name']) && $_FILES['ref-image']['error'] == UPLOAD_ERR_OK && is_uploaded_file($_FILES['ref-image']['tmp_name'])){
	// Image
	$fileName1 = $_FILES["assets-image"]["name"];
	$fileSize1 = $_FILES["assets-image"]["size"];
	$tmpName1 = $_FILES["assets-image"]["tmp_name"];
	//
	$fileName2 = $_FILES["ref-image"]["name"];
	$fileSize2 = $_FILES["ref-image"]["size"];
	$tmpName2 = $_FILES["ref-image"]["tmp_name"];
	// Folder
	$folder = '../client_request_images/';
	//Extension
	$imageExtension1 = explode('.', $fileName1);
	$imageExtension1 = strtolower(end($imageExtension1));
	$imageExtension2 = explode('.', $fileName2);
	$imageExtension2 = strtolower(end($imageExtension2));
	// New Image Name
	$newImageName1 = uniqid();
  	$newImageName1 .= '.' . $imageExtension1;
  	$newImageName2 = uniqid();
  	$newImageName2 .= '.' . $imageExtension2;
 
	if(move_uploaded_file($tmpName1, $folder . $newImageName1) && move_uploaded_file($tmpName2, $folder . $newImageName2)){

		$insert_request = "INSERT INTO request_gv(request_gvcode, client_id, type_of_request, name_set, product, img_asset, img_refference, base_color, brand_name, status) VALUES('$randomString','$client_identification','$tor','$name_request','$product_name','$newImageName1','$newImageName2','$base_color','$brand_name','$status')";
		if($connection->query($insert_request) === TRUE){
			echo 'File Uploaded Successfully';
		} else {
			echo 'Error: '.$connection->error;
		}
		$connection->close();
	} else {
		echo 'Error: Unable to move file to designated folder';
	}
} else {
	echo 'Error: File upload failed';
}

?>
<?php

//require_once '../config.php';

//function validate($data){
//	$data = trim($data);
//	$data = stripslashes($data);
//	$data = htmlspecialchars($data);
//	return $data;
//}

//$client_identification = validate($_POST['client-identification//']);
//$product_name = validate($_POST['product-name']);
//$name_request = validate($_POST['name-set']);
//$base_color = validate($_POST['base-color-req']);
//$brand_name = validate($_POST['brand-cid-req']);
//$tor = 'Graphics';
//$status = 'Pending';

// Image
//$fileName1 = $_FILES["assets-image"]["name"];
//$fileSize1 = $_FILES["assets-image"]["size"];
//$tmpName1 = $_FILES["assets-image"]["tmp_name"];
//
//$fileName2 = $_FILES["ref-image"]["name"];
//$fileSize2 = $_FILES["ref-image"]["size"];
//$tmpName2 = $_FILES["ref-image"]["tmp_name"];
//
//$validImageExtension1 = ['jpg', 'jpeg', 'png'];
//$imageExtension1 = explode('.', $fileName1);
//$imageExtension1 = strtolower(end($imageExtension1));
//
//$validImageExtension2 = ['jpg', 'jpeg', 'png'];
//$imageExtension2 = explode('.', $fileName2);
//$imageExtension2 = strtolower(end($imageExtension2));
//
//$length = 10; // Change this to set the length of the random string
//$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//$randomString = '';

//for ($i = 0; $i < $length; $i++) {
   //$randomString .= $characters[rand(0, strlen($characters) - 1)];
//}

	//$newImageName1 = uniqid();
   //$newImageName1 .= '.' . $imageExtension1;
   //$newImageName2 = uniqid();
   //$newImageName2 .= '.' . $imageExtension2;

   //move_uploaded_file($tmpName1, '../client_request_images/' . $newImageName1);
   //move_uploaded_file($tmpName2, '../client_request_images/' . $newImageName2);

//$insert_request = "INSERT INTO request_gv(request_gvcode, client_id, type_of_request, name_set, product, img_asset, img_refference, base_color, brand_name, status) VALUES('$randomString','$client_identification','$tor','$name_request','$product_name','$newImageName1','$newImageName2','$base_color','$brand_name','$status')";
//$execute_query = mysqli_query($connection, $insert_request);
//if(!$execute_query){
//	echo "Request for graphics was encountered error";
//}
//else{
//	echo "Graphic Request Submitted";
//}

?>