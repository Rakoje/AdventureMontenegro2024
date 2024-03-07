<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>

<div class="home-bg d-flex justify-content-center align-items-center text-center">
    <div class="slide_up"><br><br><br><h1><?php echo $home_text;?></h1></div>
</div>
<div class="container animated-div" id="targetDiv">
    <div class="row">
        <div class="col-sm-12 text-center mt-4">
            <h2><?php echo $offer_title;?></h2>
            <br>
            <?php echo $about_text;?>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 text-center mt-4 mb-4">
            <h2><?php echo $canyoning_title;?></h2>
        </div>
        <div class="col-sm-6">
            <a href="nevidio.php"><img class="img-card" src="<?php echo $nevidio_src;?>" alt="Nevidio"></a>
        </div>
        <div class="col-sm-6">
            <a href="drenostica.php"><img class="img-card" src="<?php echo $drenostica_src;?>" alt="Drenostica"></a>
        </div>
        <div class="col-sm-6">
            <a href="medjurec.php"><img class="img-card" src="<?php echo $medjurec_src;?>" alt="Medjurec"></a>
        </div>
        <div class="col-sm-6">
            <a href="skurda.php"><img class="img-card" src="<?php echo $skurda_src;?>" alt="Skurda"></a>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center">
        <div class="col-sm-12 text-center mt-4 mb-4">
            <h2><?php echo $climbing_title;?></h2><br>
        </div>
        <div class="col-sm-6">
            <a href="bouldering.php"><img class="img-card" src="<?php echo $bouldering_src;?>" alt="Bouldering"></a>
        </div>
        <div class="col-sm-6">
            <a href="multi_pitch.php"><img class="img-card" src="<?php echo $multi_pitch_src;?>" alt="Multi Pitch Climbing"></a>
        </div>
        <div class="col-sm-6">
            <a href="sport_climbing.php"><img class="img-card" src="<?php echo $sport_climbing_src;?>" alt="Sport Climbing"></a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 text-center mt-4 mb-4">
            <h2><?php echo $rafting_title;?></h2>
            <br>
        </div>
        <div class="col-sm-6">
            <a href="tara_rafting.php"><img class="img-card" src="<?php echo $tara_src;?>" alt="Tara Rafting"></a>
        </div>
        <div class="col-sm-6">
            <a href="scepan_polje_rafting.php"><img class="img-card" src="<?php echo $scepan_src;?>" alt="Scepan Rafting"></a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 text-center mt-4 mb-4">
            <h2><?php echo $trekking_title;?></h2>
            <br>
        </div>
        <div class="col-sm-6">
            <a href="durmitor.php"><img class="img-card" src="<?php echo $durmitor_src;?>" alt="Durmitor"></a>
        </div>
        <div class="col-sm-6">
            <a href="mrtvica.php"><img class="img-card" src="<?php echo $mrtvica_src;?>" alt="Mrtvica"></a>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center">
        <div class="col-sm-12 text-center mt-4 mb-4">
            <h2><?php echo $ski_title;?></h2>
            <br>
        </div>
        <div class="col-sm-6">
            <a href="ski_touring.php"><img class="img-card" src="<?php echo $ski_touring_src;?>" alt="Ski Touring"></a>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center">
        <div class="col-sm-12 text-center mt-4 mb-4">
            <h2><?php echo $drone_title;?></h2>
            <br>
        </div>
        <div class="col-sm-6">
            <a href="drone.php"><img class="img-card" src="<?php echo $drone_src;?>" alt="Drone Footage"></a>
        </div>
    </div>
</div>
<?php include('helpers/footer.php'); ?>