<?php
$target_dir = dirname(__FILE__).'/../media/';
$target_file = $target_dir . basename($file["name"]);
// print_r('<br><br><pre>');
// print_r($file);
// print_r($_POST);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$uploaded = 0;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "<br>Fisierul ".basename($file['name'])." nu este imagine.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// Check file size
if ($file["size"] > 5000000) {
    echo "<br>Ne pare rau, poza ".basename($file['name'])." este prea mare.";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "JPG" && 
    $imageFileType != "png" && $imageFileType != "PNG" && 
    $imageFileType != "jpeg" && $imageFileType != "JPEG" && 
    $imageFileType != "gif" && $imageFileType != "GIF" ) {
    echo "<br>Ne pare rau, se accepta doar format: JPG, JPEG, PNG sau GIF.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<br>Ne pare rau, poza ".basename($file["name"])." nu a putut fi incarcata. Va rugam, incercati din nou.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        echo "<br>Poza ". basename($file["name"]). " a fost incarcata.";
        $uploaded = 1;
    } else {
        echo "<br>Ne pare rau, poza ".basename($file["name"])." nu a putut fi incarcata.";
    }
}
?>