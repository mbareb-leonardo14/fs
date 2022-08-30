<?= $this->extend('layout/template'); ?>

<?= $this->section('home_page') ?>

<!--  -->
<header class="row position-relative text-center text-white mb-5 row-full-width">
   <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img src=" <?= base_url('/img/banner.jpg'); ?>" class="w-100 img-fluid" alt="banner" />
            <div class="position-absolute top-50 start-50 translate-middle-x w-100 px-3">
               <h1 class="display-4">
                  Midsummer Madness 2022
               </h1>
               <a href="#new" class="btn btn-dark">Explore New Arrivals</a>
            </div>
         </div>
         <div class="carousel-item">
            <img src="<?= base_url('/img/banner2.jpg'); ?>" class="w-100 img-fluid" alt="banner2" />
            <div class="position-absolute top-50 start-50 translate-middle-x w-100 px-3">
               <h1 class="display-4">
                  Midsummer Madness 2022
               </h1>
               <a href="#new" class="btn btn-dark">Explore New Arrivals</a>
            </div>
         </div>
         <div class="carousel-item">
            <img src="<?= base_url('/img/banner3.jpg'); ?>" class="d-block w-100" alt="banner3">
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>
</header>

<div class="container position-relative text-center">
   <h2 class="display-6 py-5">Most Popular</h2>
   <div class="d-flex justify-content-between align-items-center  my-5" id="new">
      <div class="card m-2">
         <a href="./product.html">
            <img src="./img/clothes/img1.jpg" alt="Product" class="card-img-top" height="300" />
         </a>
         <div class="card-body">
            <p class="card-text fw-bold">
               Vans Era Black/White
            </p>
            <small class="text-secondary">IDR. 600.000</small>
         </div>
      </div>
      <div class="card m-2">
         <a href="./product.html">
            <img src="./img/clothes/img2.jpg" alt="Product" class="card-img-top" height="300" />
         </a>
         <div class="card-body">
            <p class="card-text fw-bold">
               Hoodie H*M Tom and Jerry
            </p>
            <small class="text-secondary">IDR. 150.000</small>
         </div>
      </div>
      <div class="card m-2">
         <a href="./product.html">
            <img src="./img/clothes/img4.jpg" alt="Product" class="card-img-top" height="300" />
         </a>
         <div class="card-body">
            <p class="card-text fw-bold">
               Long Pants Chino J Crew
            </p>
            <small class="text-secondary">IDR. 180.000</small>
         </div>
      </div>
      <div class="card m-2">
         <a href="./product.html">
            <img src="./img/clothes/img3.jpg" alt="Product" class="card-img-top" height="300" />
         </a>
         <div class="card-body">
            <p class="card-text fw-bold">
               Kemeja Flanel Ilefen Tuelef
            </p>
            <small class="text-secondary">IDR. 135.000</small>
         </div>
      </div>
   </div>

   <a href="./productlist.html" class="btn btn-outline-dark my-5">View All Products</a>

   <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row my-5">
      <div class="position-relative m-2">
         <img src="./img/menu/img1.jpg" alt="Crewneck" height="300">
         <a href="#" class="btn btn-dark position-absolute start-0 bottom-0 ms-2 mb-2 d-block">Crewneck</a>
      </div>
      <div class="position-relative m-2">
         <img src="./img/menu/img2.jpg" alt="Shoes" height="300">
         <a href="#" class="btn btn-dark position-absolute start-0 bottom-0 ms-2 mb-2 d-block">Shoes</a>
      </div>
      <div class="position-relative m-2">
         <img src="./img/menu/img3.jpg" alt="Flannel" height="300">
         <a href="#" class="btn btn-dark position-absolute start-0 bottom-0 ms-2 mb-2 d-block">Flannel</a>
      </div>
      <div class="position-relative m-2">
         <img src="./img/menu/img4.jpg" alt="T-Shirt" height="300">
         <a href="#" class="btn btn-dark position-absolute start-0 bottom-0 ms-2 mb-2 d-block">T-Shirt</a>
      </div>
   </div>

   <div class="row text-start align-items-center gy-5 my-5">
      <div class="col-12 col-md-6">
         <img src="./img/about/img1.jpg" class="w-100 h-100" alt="">
      </div>
      <div class="col-12 col-md-6">
         <div>
            <h2 class="display-4">Hoodie by Nicklodeon</h2>
            <p><strong>Nickelodeon Men’s SpongeBob SquarePants Sweatshirt – Retro 90s SpongeBob, Patrick Cartoon
                  Hoodie</strong> ideal for collectors of vintage, retro, and novelty clothing. Animation and
               television history buffs will love these tops, too. The pullover design and versatility of this
               sweatshirt make it easy to add a fun accent to any outfit.</p>
         </div>
      </div>
   </div>

   <div class="row text-start align-items-center gy-5 my-5">
      <div class="col-12 col-md-6">
         <div>
            <h2 class="display-4">Award</h2>
            <p><strong>Nickelodeon Men’s SpongeBob SquarePants Sweatshirt – Retro 90s SpongeBob, Patrick Cartoon
                  Hoodie</strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel accusamus,
               impedit officiis eum sed nostrum a neque deleniti cum. Omnis?</p>
         </div>
      </div>
      <div class="col-12 col-md-6">
         <img src="./img/about/img1,1.jpg" class="w-100 h-100" alt="">
      </div>
   </div>
</div>

<div class="row bg-light justify-content-between align-items-center flex-column flex-lg-row">
   <div class="d-flex m-5 p-5" style="max-width: 25rem;">
      <div class="position-relative">
         <h1 class="display-1"><i class="fa-solid fa-money-bill-1-wave"></i></h1>
         <br />
         <h5>EASY PAYMENT</h5>
      </div>
      <div class="position-relative">
         <h1 class="display-1"><i class="fa-solid fa-money-bill-1-wave"></i></h1>
         <br />
         <h5>EASY PAYMENT</h5>
      </div>
   </div>
</div>


<?= $this->endSection() ?>