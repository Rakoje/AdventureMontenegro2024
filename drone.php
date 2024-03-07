<?php include('helpers/header.php'); ?>
<?php include('helpers/navbar.php'); ?>
<?php include('helpers/text.php'); ?>
<div class="drone-bg-image d-flex justify-content-center align-items-center text-center">
    <div class="slide_up">
        <div class="title"><?php echo $drone_title; ?></div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 mt-5">
            <h2 style="padding-top: 15px; color:white; font-weight:bold"><?php echo $drone_explore; ?></h2>
        </div>
    </div>
    <div class="row text-center" style="color: white">
        <div class="col-sm-12">
            <img src="assets/group.png" alt="" class="first-r"> 1+
            <img src="assets/timer.png" alt="" class="second-r"> 2-5h
            <img src="assets/price.png" alt="" class="third-r"> 350€
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p class="mb-2" style="color: white; padding: 35px">
                <?php echo $drone_text; ?>
            </p>
        </div>
    </div>
    <div class="row text-center mt-4" style="color:white">
        <div class="col-sm-4">
            <img src="assets/dron-1.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/dron-2.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-4">
            <img src="assets/dron-3.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="mb-2" style="color: white; padding: 35px">
                <?php echo $drone_text_2; ?>
            </p>
        </div>
    </div>
    <div class="row text-center mt-5" style="color:white">
        <div class="col-sm-6">
            <img src="assets/dron-4.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/dron-5.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="mb-2" style="color: white; padding: 35px">
                <?php echo $drone_text_3; ?>
            </p>
        </div>
    </div>
    <div class="row text-center mt-5" style="color:white">
        <div class="col-sm-6">
            <img src="assets/dron-6.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/dron-7.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12">
            <p class="mb-2" style="color: white; padding: 35px">
                <?php echo $drone_text_4; ?>
            </p>
        </div>
    </div>
    <div class="row text-center mt-3">
        <div class="col-sm-12">
            <button class="btn btn-hike" style="color: white" onclick="sendEmail()">
                <h2><?php echo $book; ?></h2>
            </button>
        </div>
    </div>
    <div class="row text-center mt-5" style="color:white">
        <div class="col-sm-6">
            <img src="assets/dron-8.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/dron-9.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/dron-10.jpg" alt="" style="width: 100%" class="mb-3 mt-3">
        </div>
        <div class="col-sm-6">
            <img src="assets/dron-11.jpg" alt="" style="width: 100%" class="mb-4 mt-3">
        </div>
    </div>
</div>

<?php include('helpers/footer.php'); ?>
