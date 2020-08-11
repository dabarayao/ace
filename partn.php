<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog - Flexor Bootstrap Template</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Flexor - v2.2.0
    * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<?php

include('layouts/header.php');

?>


<style>

    .is_featured {
        display: flex;
        justify-content: center;
    }
    .is_featured img{
        width: 250px;
    }
    .thumbnails ul{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        list-style: none;
    }

</style>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="partn.php">Parternship</a></li>
                <li>Nos parténaires</li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container">

            <section id="clients" class="clients">
                <div class="container" data-aos="fade-up">

                    <div class="owl-carousel clients-carousel">
                        <img src="assets/img/clients/client-1.png" alt="">
                        <img src="assets/img/clients/client-2.png" alt="">
                        <img src="assets/img/clients/client-3.png" alt="">
                        <img src="assets/img/clients/client-4.png" alt="">
                        <img src="assets/img/clients/client-5.png" alt="">
                        <img src="assets/img/clients/client-6.png" alt="">
                        <img src="assets/img/clients/client-7.png" alt="">
                        <img src="assets/img/clients/client-8.png" alt="">
                    </div>

                </div>
            </section>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->


<?php

include('layouts/footer.php');

?>

<script>

    var $mainImage = $('#default'),
        originalImageSrc = $mainImage.attr('src');

    $(".thumbnails li img").hover(function() {
        var newImageSrc = $(this).attr('src');
        $('.is_featured img').attr('src', newImageSrc);
    }, function() {
        $('.is_featured img').attr('src', originalImageSrc);
    });
</script>

</body>

</html>