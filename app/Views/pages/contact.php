<?= $this->extend('layout/template'); ?>

<?= $this->section('contact'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-center my-4">CONTACT US</h2>
            <ul class="list-unstyled mt-4">
                <h4>email</h4>
                <li><a href="futuristicstore@gmail.com" type="email">futuristicstore@gmail.com</a></li>
            </ul>
            <ul class="list-unstyled mt-4">
                <h4>whatsapp</h4>
                <li>082269138414</li>
            </ul>
            <ul class="list-unstyled mt-4">
                <h4>facebook</h4>
                <li>futuristicstore</li>
            </ul>

            <?php foreach($contact as $c) : ?>
            <ul>
                <li><?= $c['tipe']; ?></li>
                <li><?= $c['email']; ?></li>
                <li><?= $c['facebook']; ?></li>
            </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>