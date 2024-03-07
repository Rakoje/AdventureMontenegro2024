<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="hike-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $trekking_title;?></div>
        <div class="subtitle"><?php echo $trekking_subtitle;?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 class="mb-5"><?php echo $trekking_title;?></h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p>
                <?php echo $trekking_text;?>
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
            <a href="durmitor.php"><img class="img-card" src="<?php echo $durmitor_src;?>" alt="Durmitor"></a>
        </div>
        <div class="col-sm-6">
            <a href="mrtvica.php"><img class="img-card" src="<?php echo $mrtvica_src;?>" alt="Mrtvica"></a>
        </div>
    </div>
</div>
<?php include ('helpers/footer.php') ?>
