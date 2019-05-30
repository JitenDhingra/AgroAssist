<?php
if (isset($_SESSION['loggedIn')) {
$tmp = $_SESSION['Name'];
session_destroy();
session_regenerate_id();
$_SESSION['Name'] = $tmp;
}
?>