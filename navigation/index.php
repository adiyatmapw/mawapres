<?php
if($_SESSION['role'] == "rl_mahasiswa"){
    include('mahasiswa.php');
}elseif($_SESSION['role'] == "rl_fakultas"){
    include('fakultas.php');
}else{
    include('default.php');
}