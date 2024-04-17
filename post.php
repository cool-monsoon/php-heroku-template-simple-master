<?php
declare(strict_types=1);

session_start ();
if ($_POST['user_name'] !== '') {
    $_SESSION['username'] = $_POST['username'];
}

header("Location: ./index.php");