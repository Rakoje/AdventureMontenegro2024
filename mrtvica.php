<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="mrtvica-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $mrtvica_title; ?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $mrtvica_explore; ?></h2>
        </div>
    </div>
    <div class="row text-center" style="color: white">
        <div class="col-sm-12">
            <img src="assets/group.png" alt="" class="first-r"> 1+
            <img src="assets/timer.png" alt="" class="second-r"> 6h
            <img src="assets/walk.png" alt="" class="third-r"> 7km
            <img src="assets/price.png" alt="" class="fourth-r"> 150€
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p class="mb-5" style="color: white; padding: 35px">
                <?php echo $mrtvica_text; ?>
            </p>
        </div>
    </div>
    <div class="row text-center mb-3" style="color:white">
        <div class="col-sm-3">
            <img src="assets/Mrtvica 1.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 2.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 3.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 4.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Mrtvica 9.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Mrtvica 10.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/Mrtvica 11.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 5.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 6.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 7.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-3">
            <img src="assets/Mrtvica 8.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6" style="color: white">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $programme;?></h2>
            <p class="mb-5" style="color: white; padding: 0">
                <?php echo $mrtvica_program;?>
            </p>
        </div>
        <div class="col-sm-6" style="color: white">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $details;?></h2>
            <p class="mb-5" style="color: white; padding: 0">
                <?php echo $mrtvica_details;?>
            </p>
        </div>
    </div>
</div>
<div class="mrtvica2-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="canyon-content">
                    <div class="canyon-bg-title-3">
                        <?php echo $conditions;?>
                    </div>
                    <p class="canyon-bg-subtitle-3">
                        <?php echo $mrtvica_conditions;?>
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
