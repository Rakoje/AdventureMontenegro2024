<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="climbing-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $climbing_title;?></div>
        <div class="subtitle"><?php echo $climbing_subtitle;?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 class="mb-5"><?php echo $climbing_title;?></h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p>
                <?php echo $climbing_text;?>
            </p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 mt-5 mb-5">
            <h2 style="font-weight:bold"><?php echo $offer_title;?></h2>
        </div>
    </div>
    <div class="row text-center d-flex justify-content-center">
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
</div>
<?php include ('helpers/footer.php') ?>
