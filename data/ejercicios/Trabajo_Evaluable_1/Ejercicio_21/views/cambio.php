<?php
session_start();
if (isset($_POST["color"])) {
    $color = $_POST['color'];
    $_SESSION['color'] = $color;
    header("Location: ?method=home");
}
