<?php
// Start the session
session_start();

// Display session data
if(isset($_SESSION['username']) && isset($_SESSION['favBook'])) {
    echo "Welcome Sir , ". $_SESSION['username']."<br>";

    echo "<br> Your favorite category is " . $_SESSION['favBook'];
} else {
    echo "Session data not set.";
}
?>
