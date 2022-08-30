<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <!-- Favicons -->
   <link href="<?= base_url(''); ?>/img/favicon.ico" rel="icon">

   <!-- Font Awasome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

   <!-- Icon Bootstrap -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

   <!-- Vendor CSS Files -->
   <link href="<?= base_url('/aos/aos.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
   <link href="<?= base_url('/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?= base_url('/css/style.css'); ?>" />
   <!-- <link rel="stylesheet" href="/css/style.css" /> -->

   <title>FUTURISTICSTORE | <?= $title; ?></title>
</head>

<body>

   <?= $this->include('layout/navbar'); ?>

   <?= $this->renderSection('home_page') ?>

   <?= $this->renderSection('login'); ?>

   <?= $this->renderSection('register'); ?>

   <?= $this->renderSection('blog'); ?>

   <?= $this->renderSection('contact'); ?>

   <?= $this->renderSection('clothing'); ?>

   <?= $this->include('layout/footer'); ?>


   <!-- back to top -->
   <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i
         class="bi bi-arrow-up-short"></i></a>

   <!-- JS Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
   </script>

   <!-- Vendor JS Files -->
   <script src="<?= base_url('/vendor/aos/aos.js'); ?>"></script>
   <script src="<?= base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
   <script src="<?= base_url('/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
   <script src="<?= base_url('/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
   <script src="<?= base_url('/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
   <script src="<?= base_url('/vendor/php-email-form/validate.js'); ?>"></script>

   <!-- Template Main JS File -->
   <script src="<?= base_url('/js/script.js'); ?>"></script>
</body>
</body>

</html>