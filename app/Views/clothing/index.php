<?= $this->extend('layout/template'); ?>

<?= $this->section('clothing'); ?>

<div class="container position-relative text-center row-full-width">
    <h2 class="display-6 py-3">Stok indomie</h2>
    <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row my-5" id="new">
        <div class="card m-2 rounded-0">
            <a href=" <?= base_url('./product.html'); ?>">
                <img src=" <?= base_url('./img/clothes/img1.jpg'); ?>" alt="Product" class="card-img-top"
                    height="300" />
            </a>
            <div class="card-body rounded-0">
                <p class="card-text fw-bold">
                    Vans Era Black/White
                </p>
                <small class="text-secondary">IDR. 600.000</small>
            </div>
            <div class="mb-3">
                <a href="<?= base_url(''); ?>" class="btn btn-dark rounded-0">Detail</a>
                <a href="<?= base_url(''); ?>" class="btn btn-danger rounded-0">Delete</a>
            </div>
        </div>
        <div class="card m-2 rounded-0 d-">
            <a href="<?= base_url('./product.html'); ?>">
                <img src="<?= base_url('./img/clothes/img2.jpg'); ?>" alt="Product" class="card-img-top" height="300" />
            </a>
            <div class="card-body rounded-0">
                <p class="card-text fw-bold">
                    Hoodie H*M Tom and Jerry
                </p>
                <small class="text-secondary">IDR. 150.000</small>
            </div>
            <div class="mb-3">
                <a href="<?= base_url(''); ?>" class="btn btn-dark rounded-0">Detail</a>
                <a href="<?= base_url(''); ?>" class="btn btn-danger rounded-0">Delete</a>
            </div>

        </div>
        <div class="card m-2 rounded-0">
            <a href="<?= base_url('./product.html'); ?>">
                <img src="<?= base_url('./img/clothes/img4.jpg'); ?>" alt="Product" class="card-img-top" height="300" />
            </a>
            <div class="card-body rounded-0">
                <p class="card-text fw-bold">
                    Long Pants Chino J Crew
                </p>
                <small class="text-secondary">IDR. 180.000</small>
            </div>
            <div class="mb-3">
                <a href="<?= base_url(''); ?>" class="btn btn-dark rounded-0">Detail</a>
                <a href="<?= base_url(''); ?>" class="btn btn-danger rounded-0">Delete</a>
            </div>
        </div>
        <div class="card m-2 rounded-0">
            <a href="<?= base_url('./product.html'); ?>">
                <img src="<?= base_url('./img/clothes/img3.jpg'); ?>" alt="Product" class="card-img-top" height="300" />
            </a>
            <div class="card-body rounded-0">
                <p class="card-text fw-bold">
                    Kemeja Flanel Ilefen Tuelef
                </p>
                <small class="text-secondary">IDR. 135.000</small>
            </div>
            <div class="mb-3">
                <a href="<?= base_url(''); ?>" class="btn btn-dark rounded-0">Detail</a>
                <a href="<?= base_url(''); ?>" class="btn btn-danger rounded-0">Delete</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>