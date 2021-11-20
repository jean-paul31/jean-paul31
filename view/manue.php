<?php
require "../controller/header.php";
?>

<body>
    <?php
    require "../view/head.php";
    ?>

    <!--GALERIE-->
    <br>
    <div class="container">
        <div class="row galerie">
            <div class="col-4">
                <a href="assets/galerie/img1.png" data-lightbox="ma galerie"><img src="assets/min/img1.min.png"></a>
                <a href="assets/galerie/img2.png" data-lightbox="ma galerie"><img src="assets/min/img2.min.png"
                        style="display:none"></a>
            </div>
            <div class="col-4">
                <a href="assets/galerie/img5.png" data-lightbox="ma galerie"><img src="assets/min/img5.min.png"></a>
            </div>
            <div class="col-4">
                <a href="assets/galerie/img6.png" data-lightbox="ma galerie"><img src="assets/min/img6.min.png"></a>
            </div>

        </div>
    </div>

    <!--GALERIE-->
</body>
<?php

require "../controller/footer.php";