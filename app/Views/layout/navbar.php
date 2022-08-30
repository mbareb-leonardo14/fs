<!-- Navbar -->
<nav class="row navbar navbar-expand-lg bg-light position-fixed top-0 start-0 w-100 shadow-sm">
   <div class="container">
      <a class="navbar-brand d-lg-none" href="#">
         FUTURISTIC
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse p-2 flex-column" id="navbarContent">

         <div class="d-flex justify-content-center justify-content-lg-between flex-column flex-lg-row w-100">
            <form action="" class="d-flex">
               <input type="search" placeholder="Search..." class="form-control me-2" />
               <button class="btn btn-outline-dark ml-7" type="submit">
                  <i class="bi bi-search"></i>
               </button>
            </form>
            <a class="navbar-brand d-none d-lg-block" href="<?= base_url('/'); ?>"><img
                  src="<?= base_url('/img/logo.png'); ?>" alt="logo" height="33"></a>
            <ul class="navbar-nav">
               <li class="nav-item d-flex align-items-center">
                  <a class="nav-link mx-2" href="<?= base_url('/login'); ?>">
                     <i class="fas fa-user"></i>
                  </a>
               </li>
               <li class="nav-item d-flex align-items-center">
                  <a class="nav-link mx-2" href="#">
                     <i class="fa-solid fa-bag-shopping"></i>
                  </a>
                  <span class="badge rounded-pill bg-secondary">0</span>
               </li>
               <li class="nav-item dropdown d-flex align-items-center ml-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     IDR
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">IDR</a></li>
                     <li><a class="dropdown-item" href="#">USD</a></li>
                  </ul>
               </li>
            </ul>
         </div>
         <div class="d-block w-100">
            <ul class="navbar-nav d-flex justify-content-center pt-2">
               <li class="nav-item mx-2"><a href="<?= base_url('/clothing'); ?>" class="nav-link">Clothing</a></li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     Marketplaces
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="https://shopee.co.id/futuristic.collective">Shopee</a>
                     </li>
                     <li><a class="dropdown-item" href="#">Tokopedia</a></li>
                  </ul>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false">
                     Categories
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a class="dropdown-item" href="#">Outerwear</a></li>
                     <li><a class="dropdown-item" href="#">Tops</a></li>
                     <li><a class="dropdown-item" href="#">Bottoms</a></li>
                     <li><a class="dropdown-item" href="#">Footwear</a></li>
                  </ul>
               </li>
               <li class="nav-item mx-2"><a href="#" class="nav-link">Payment Confirmation</a></li>
               <li class="nav-item mx-2"><a href="<?= base_url('/pages'); ?>" class="nav-link">Blog</a></li>
               <li class="nav-item mx-2"><a href="<?= base_url('/contact'); ?>" class="nav-link">Contact</a>
               </li>
            </ul>
         </div>
      </div>
   </div>
</nav>
<!-- End navbar -->