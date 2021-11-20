<?php
session_start();
include "../controller/header.php";
include "head.php";

if (isset($_SESSION['id']) == 1) {
    include "resume.php";
}




include "../controller/footer.php";