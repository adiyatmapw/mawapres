<?php
if($_SESSION['role'] == "rl_mahasiswa"){
    include('mahasiswa.php');
}else{
    include('default.php');
}