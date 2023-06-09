<?php
session_start();
include '../model/Pakta.php';
$db = new Pakta();

$action = $_GET['action'];
if ($action == 'upload') {
    if ($_FILES['file']['name']) {
        $allowed_extensions = array('jpeg', 'jpg', 'png', 'pdf');
        $file_extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        
        if (in_array($file_extension, $allowed_extensions)) {
            $upload_dir = '../fileuploads/';
            $file_name = $_FILES['file']['name'];
            $file_path = $upload_dir . $file_name;
            
            if (move_uploaded_file($_FILES['file']['tmp_name'], $file_path)) {
                $db -> insertPakta($_SESSION['name'],$_SESSION['username'],$file_path,$_SESSION['programstudi']);
                header("location:../upload/dokumenlain.php?message=add-success");
            } else {
                echo "Terjadi kesalahan saat mengunggah file.";
            }
        } else {
            echo "Hanya file dengan ekstensi .jpeg, .png, dan .pdf yang diperbolehkan.";
        }
    }
    
} else {
    header("location:../upload/dokumenlain.php");
}
