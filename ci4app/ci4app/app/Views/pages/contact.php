<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <h2>Contact</h2>
    <?php foreach($alamat as $a) : ?>
        <ul>
            <li>
                <?= $a['tipe'] ?><br>
            </li>
            <li>
                <?= $a['alamat'] ?><br>
            </li>
            <li>
                <?= $a['kota'] ?>
            </li>
        </ul>
    <?php endforeach; ?>    
</div>
    
<?= $this->endSection(); ?>
