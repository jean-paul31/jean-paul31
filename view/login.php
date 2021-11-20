<?php
session_start();
require "../controller/header.php";
require "head.php";
require "../controller/connexion.php";
?>
<div class="col-md-3 offset-4 center-block  my-auto text-center login">
    <h1 style="color: white;">LEADER STATION C</h1>
    <form action="" method="POST" class="form-group">
        <div class="mb-3">
            <label for="" class="form label" style="color: white;">Username</label>
            <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="mb-3">
            <label for="" class="form label" style="color: white;">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" class="form-control">
        </div>
        <div>
            <input type="submit" class="btn btn-primary" name="connexion" value="Entrer">
        </div>
    </form>
    <?php
    if (isset($erreur)) {
        echo "<p class='text-danger'>" . $erreur . "</p>";
    }
    ?>
</div>
<?php
require "../controller/footer.php";
?>