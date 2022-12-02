<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="/img/<?= $devices['gambar'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $devices['device_name'] ?></h5>
            <p class="card-text"><?= $devices['device_brand'] ?></p>
            <a href="/" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>