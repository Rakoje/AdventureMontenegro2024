<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="rafting-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $rafting_title;?></div>
        <div class="subtitle"><?php echo $rafting_subtitle;?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 class="mb-5"><?php echo $rafting;?></h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p>
                <?php echo $rafting_text;?>
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
            <a href="tara_rafting.php"><img class="img-card" src="<?php echo $tara_src;?>" alt="Tara Rafting"></a>
        </div>
        <div class="col-sm-6">
            <a href="scepan_polje_rafting.php"><img class="img-card" src="<?php echo $scepan_src;?>" alt="Scepan Rafting"></a>
        </div>
    </div>
</div>
<?php include ('helpers/footer.php') ?>
