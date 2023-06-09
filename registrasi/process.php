<?php
session_start();
include '../model/Registrasi.php';
$db = new Registrasi();

$action = $_GET['action'];
if ($action == 'add') {
    $db -> insertRegistrasi($_POST['nama'], $_POST['nim'], $_POST['programstudi'], $_POST['fakultas'], $_POST['semester'], $_POST['nohp'] );
    header("location:index.php?message=add-success");

// }elseif ($action == 'edit') {
//     $db -> editRegistrasi($_POST['id'], $_POST['name'], $_POST['qty'], $_POST['sp'] );
//     header("location:index.php?message=edit-success");
// }elseif ($action == 'delete') {
//     $db -> deleteRegistrasi($_GET['id']);
//     header("location:index.php?message=delete-success");
} else {
    header("location:index.php");
}
