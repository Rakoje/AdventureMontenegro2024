<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="nevidio-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $nevidio_title; ?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 style="padding: 15px; color:white; font-weight:bold"><?php echo $nevidio_explore;?></h2>
        </div>
    </div>
    <div class="row text-center" style="color: white">
        <div class="col-sm-12">
            <img src="assets/group.png" alt="" class="first-r"> 3+
            <img src="assets/timer.png" alt="" class="second-r"> 4h
            <img src="assets/walk.png" alt="" class="third-r"> 1.7km
            <img src="assets/price.png" alt="" class="fourth-r"> 150€
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p class="mb-5" style="color: white; padding: 35px">
                <?php echo $nevidio_text_1;?>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center mb-3" style="color:white">
        <div class="col-sm-4">
            <img src="assets/canyon-7.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/canyon-5.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/canyon-4.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center mb-5" style="color:white">
        <div class="col-sm-4">
            <img src="assets/canyon-3.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
            <?php echo $nevidio_img_1;?>
        </div>
        <div class="col-sm-4">
            <img src="assets/canyon-2.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
            <?php echo $nevidio_img_2;?>
        </div>
        <div class="col-sm-4">
            <img src="assets/canyon-1.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
            <?php echo $nevidio_img_3;?>
        </div>
    </div>
</div>
<div class="canyon-bg-image-2 d-flex justify-content-center text-center align-items-center ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p>
                    <?php echo $nevidio_text_2?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col-sm-6" style="color: white">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $programme;?></h2>
            <p class="mb-5" style="color: white; padding: 0">
                <?php echo $nevidio_program;?>
            </p>
        </div>
        <div class="col-sm-6" style="color: white">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $details;?></h2>
            <p class="mb-5" style="color: white; padding: 0">
                <?php echo $nevidio_details;?>
            </p>
        </div>
    </div>
</div>
<div class="canyon-bg-image-3 d-flex justify-content-center align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="canyon-bg-image-3">
                    <div class="canyon-content">
                        <div class="canyon-bg-title-3">
                            <?php echo $conditions;?>
                        </div>
                        <p class="canyon-bg-subtitle-3">
                            <?php echo $canyon_conditions;?>
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
</div>
<?php include('helpers/footer.php') ?>
