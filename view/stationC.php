<?php
require "../controller/header.php";
?>

<body>
    <?php
    require "../view/head.php";
    require "../controller/stationCController.php";
    ?>

    <div class="container resume">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <a href="<?= $lesEnjeux ?>"><img src="assets/lesenjeux.jpg" alt="" srcset=""></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="<?= $goToresume ?>"><img src="assets/resumer.png.png" alt="" srcset=""
                        class="rounded float-start"></a>
            </div>

            <div class="col">
                <a href="#"><img src="assets/quotidien.png" alt="" srcset="" class="rounded float-end"></a>
            </div>
        </div>
    </div>

</body>
<?php
require "../controller/footer.php";
?>