<?php

if ($_SESSION["role"] != 'rl_mahasiswa' and $_SESSION["role"] != 'rl_ditmawa' and $_SESSION["role"] != 'rl_fakultas') {
    session_start();
    header("Location: ../../home/index.php?message=unauthorized");
    exit();
}
