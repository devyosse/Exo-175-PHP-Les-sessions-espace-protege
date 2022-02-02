<?php

$mdp = 'password';

if (isset($_POST['pass'])) {
    if ($_POST['pass'] === $mdp) {
        header('Location: http://localhost:8000/admin/page-admin.php');
    } else {
        header('Location: http://localhost:8000/index.php?e=0');
        exit();
    }
}