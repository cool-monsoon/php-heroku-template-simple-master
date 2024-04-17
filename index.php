<?php
declare(strict_types=1);
session_start();


if (isset($_SESSION['username'])) {
    echo 'Hello, ' . $_SESSION['username'] . '!';
    echo '<br>';
    echo '<br>';
    echo '<a href="./exit.php">Exit</a>';
} else {
    include './form.html';
}
