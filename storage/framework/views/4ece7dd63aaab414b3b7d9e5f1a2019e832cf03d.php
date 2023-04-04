<?php $__env->startSection('container'); ?>
<table class="table">
  <thead>
    <tr>
    <th scope="col">No Nota</th>
    <th scope="col">Pembeli</th>
    <th scope="col">Tanggal Jual</th>
    <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($penjualan->nonota_jual); ?></td>
      <td><?php echo e($penjualan->users->name); ?></td>
      <td><?php echo e($penjualan->tgl_jual); ?></td>
      <td><?php echo e($penjualan->total_jual); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dewianadyahkusuma/Documents/Apotek/resources/views/penjualan/index.blade.php ENDPATH**/ ?>