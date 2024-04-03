<?php
session_start(); 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $username = $_SESSION['username']; 

    echo "Welcome user $username. Login successful!";
} else {
    echo "You are not logged in!";
}
?>