<?php
// router.php
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // The requested resource /subb_pic.jpg was not found on this server.
} else {
  include 'index.php';
    //echo "<p>Welcome to Subb server PHP</p>";
}
?>
