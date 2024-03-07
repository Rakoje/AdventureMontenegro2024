<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="durmitor-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $durmitor_title; ?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $durmitor_explore; ?></h2>
        </div>
    </div>
    <div class="row text-center" style="color: white">
        <div class="col-sm-12">
            <img src="assets/group.png" alt="" class="first-r"> 1+
            <img src="assets/timer.png" alt="" class="second-r"> 3-10h
            <img src="assets/walk.png" alt="" class="third-r"> 3-20km
            <img src="assets/price.png" alt="" class="fourth-r"> 150€
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p class="mb-5" style="color: white; padding: 35px">
                <?php echo $durmitor_text; ?>
            </p>
        </div>
    </div>
    <div class="row text-center mb-3" style="color:white">
        <div class="col-sm-4">
            <img src="assets/Durmitor 9.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Durmitor 1.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Durmitor 13.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/Durmitor 6.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/Durmitor 3.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Durmitor 2.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Durmitor 4.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Durmitor 11.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6" style="color: white">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $programme;?></h2>
            <p class="mb-5" style="color: white; padding: 0">
                <?php echo $durmitor_program;?>
            </p>
        </div>
        <div class="col-sm-6" style="color: white">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $details;?></h2>
            <p class="mb-5" style="color: white; padding: 0">
                <?php echo $durmitor_details;?>
            </p>
        </div>
    </div>
</div>
<div class="durmitor2-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="canyon-content">
                    <div class="canyon-bg-title-3">
                        <?php echo $conditions;?>
                    </div>
                    <p class="canyon-bg-subtitle-3">
                        <?php echo $durmitor_conditions;?>
                    </p>
                    <div class="container mb-5">
                        <div class="col-sm-12">
                            <button class="btn btn-hike" style="color: white" onclick="sendEmail()">
                                <h2><?php echo $book;?></h2>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('helpers/footer.php'); ?>
