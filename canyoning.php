<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="canyon-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $canyoning_title;?></div>
        <div class="subtitle"><?php echo $canyoning_subtitle;?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 class="mb-5"><?php echo $canyoning_title;?></h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p>
                <?php echo $canyoning_text;?>
            </p>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 mt-5 mb-5">
            <h2 style="font-weight:bold"><?php echo $offer_title;?></h2>
        </div>
    </div>
    <div class="row text-center">
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
</div>
<?php include ('helpers/footer.php') ?>
