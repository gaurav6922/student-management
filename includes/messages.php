<?php
if (isset($_SESSION['message'])) {
    echo "<p class='{$_SESSION['msg_type']}'>{$_SESSION['message']}</p>";
    unset($_SESSION['message']);
    unset($_SESSION['msg_type']);
}
?>