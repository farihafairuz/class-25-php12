<?php include 'pages/include/header.php';?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($students as $student) { ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo $student['image']; ?>" alt="student Picture" class="card-img-top" style="height: 250px">
                    <div class="card-body">
                        <h2><?php echo $student['name']; ?></h2>
                        <p><?php echo $student['email']; ?></p>
                        <p><?php echo $student['phone']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success float-right">View</a>

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</section>

<?php include 'pages/include/footer.php';?>
