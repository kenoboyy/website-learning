<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="devices">
    <h2>Daftar Device</h2>
    
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Device</th>
          <th scope="col">Merk</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Status</th>
          <th scope="col"></th>
        </tr>
      </thead>
      
      <tbody>
        <?php $i = 1; ?>
        <?php foreach($devices as $d) : ?>
        <tr>
          <th scope="row"> <?= $i++; ?> </th>
          <td><img src="/img/<?= $d['gambar'] ?>" alt=""></td>
          <td><?= $d['device_name'] ?></td>
          <td><?= $d['device_brand'] ?></td>
          <td><?= $d['device_quantity'] ?></td>
          <td><?= $d['device_status'] ?></td>
          <td>
            <a href="/devices/<?= $d['device_slug'] ?>" class="btn btn-success">Details</a>
          </td>
        </tr>
        <?php endforeach; ?>
  
      </tbody>
    </table>
  </div>
</div>
<?= $this->endSection(); ?>