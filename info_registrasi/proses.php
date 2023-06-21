<?php
session_start();
include '../model/Rekognisi.php';
$db = new Rekognisi();

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
                $db -> insertRekognisi($_SESSION['name'],$_SESSION['username'],$file_path,$_SESSION['programstudi']);
                header("location:../upload/dokumenmahasiswa.php?message=add-success");
            } else {
                echo "Terjadi kesalahan saat mengunggah file.";
            }
        } else {
            echo "Hanya file dengan ekstensi .jpeg, .png, dan .pdf yang diperbolehkan.";
        }
    }
    
} else if($action == 'edit') {
    $db -> editRekognisi($_POST['id'], $_POST['status']);
    header("location:index.php?message=edit-success");
} else {
    header("location:../upload/dokumenlain.php");
}
