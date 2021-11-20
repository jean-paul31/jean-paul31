<?php


if (isset($_GET['id'])) {
    $goTomanu = "manue.php?id=" . $_SESSION['id'];
    $stationC = "stationC.php?id=" . $_SESSION['id'];
}