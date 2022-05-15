<?php
session_start();
require "../../../db.class.php";

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

if (!isset($_FILES["myFile"])) {
    die("There is no file to upload.");
}

$filepath = $_FILES['myFile']['tmp_name'];
$fileSize = filesize($filepath);
$fileinfo = finfo_open(FILEINFO_MIME_TYPE);
$filetype = finfo_file($fileinfo, $filepath);

if ($fileSize === 0) {
    die("The file is empty.");
}

if ($fileSize > 3145728) { // 3 MB (1 byte * 1024 * 1024 * 3 (for 3 MB))
    die("The file is too large");
}

$allowedTypes = [
    'image/png' => 'png',
    'image/jpeg' => 'jpg'
];

if (!in_array($filetype, array_keys($allowedTypes))) {
    die("File not allowed.");
}

$filename = hash('sha256',generateRandomString(128)); // I'm using the original name here, but you can also change the name of the file here
$extension = $allowedTypes[$filetype];
$targetDirectory =   "../images/avatar"; // __DIR__ is the directory of the current PHP file

$newFilepath = $targetDirectory . "/" . $filename . "." . $extension;

if (!copy($filepath, $newFilepath)) { // Copy the file, returns false if failed
    die("Can't move file.");
}
unlink($filepath); // Delete the temp file
DB::update('admin', ['profilePic' => $filename.".".$extension], "id=%s", $_SESSION['user-admin']);
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>


