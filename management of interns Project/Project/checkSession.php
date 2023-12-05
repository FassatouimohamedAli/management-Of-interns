<?php
session_start();
if (isset($_SESSION['admin_id'])) {
    echo "1";
} else {
    echo "0";
}
?>
