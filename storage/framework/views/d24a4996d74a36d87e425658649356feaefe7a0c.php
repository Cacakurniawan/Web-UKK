<?php $__env->startSection('container'); ?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">Kode Obat</th>
      <th scope="col">Nama Obat</th>
      <th scope="col">Merk</th>
      <th scope="col">Jenis</th>
      <th scope="col">Satuan</th>
      <th scope="col">Golongan</th>
      <th scope="col">Kemasan</th>
      <th scope="col">Harga Jual</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($obat->kode_obat); ?></td>
      <td><?php echo e($obat->nama_obat); ?></td>
      <td><?php echo e($obat->merk); ?></td>
      <td><?php echo e($obat->jenis); ?></td>
      <td><?php echo e($obat->satuan); ?></td>
      <td><?php echo e($obat->golongan); ?></td>
      <td><?php echo e($obat->kemasan); ?></td>
      <td><?php echo e($obat->harga_jual); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dewianadyahkusuma/Documents/Apotek/resources/views/obat/index.blade.php ENDPATH**/ ?>