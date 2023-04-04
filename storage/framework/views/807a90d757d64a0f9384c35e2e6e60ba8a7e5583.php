<?php $__env->startSection('container'); ?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">No Nota</th>
      <th scope="col">Tanggal Beli</th>
      <th scope="col">Penjual</th>
      <th scope="col">Pembeli</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pembelian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($pembelian->nonota_beli); ?></td>
      <td><?php echo e($pembelian->tgl_beli); ?></td>
      <td><?php echo e($pembelian->distributors->nama_distributor); ?></td>
      <td><?php echo e($pembelian->users->name); ?></td>
      <td><?php echo e($pembelian->total_beli); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dewianadyahkusuma/Documents/Apotek/resources/views/pembelian/index.blade.php ENDPATH**/ ?>