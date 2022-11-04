<?php
if (isset($_POST["color"])) {
    $color = $_POST['color'];
    setcookie("color", $color, time() + 3600);
    header ("Location: ?method=home");
}
