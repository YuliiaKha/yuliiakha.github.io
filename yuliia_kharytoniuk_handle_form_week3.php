<?php

if (empty($_POST)) {
    die('You should not be here.');
}

if (strlen($_POST['first-name']) < 2) {
    die('First name should be at least 2 characters long.');
}

if (strlen($_POST['last-name']) < 2) {
    die('Last name should be at least 2 characters long.');
}

if (strlen($_POST['city']) < 2) {
    die('City should be at least 2 characters long.');
}

echo htmlspecialchars($_POST['first-name']) . ' '
    . htmlspecialchars($_POST['last-name']) . ' is from '
    . htmlspecialchars($_POST['city']) . ', '
    . htmlspecialchars($_POST['province']) . '.';

