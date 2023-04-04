<?php $__env->startSection('container'); ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Mark</td>
      <td>Mark@gmail.com</td>
      <td>Pemilik</td>
    </tr>
    <tr>
      <td>Otto</td>
      <td>Otto@gmail.com</td>
      <td>Apoteker</td>
    </tr>
    <tr>
      <td>Bima</td>
      <td>Bima@gmail.com</td>
      <td>Gudang</td>
    </tr>
    <tr>
      <td>Adit</td>
      <td>Adit@gmail.com</td>
      <td>Kasir</td>
    </tr>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dewianadyahkusuma/Documents/Apotek/resources/views/user/index.blade.php ENDPATH**/ ?>