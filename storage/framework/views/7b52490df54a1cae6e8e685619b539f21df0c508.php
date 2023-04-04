<?php $__env->startSection('container'); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Distributor</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distributor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($distributor->nama_distributor); ?></td>
      <td><?php echo e($distributor->alamat); ?></td>
      <td><?php echo e($distributor->notelepon); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dewianadyahkusuma/Documents/Apotek/resources/views/distributor/index.blade.php ENDPATH**/ ?>