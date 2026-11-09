<?php $__env->startSection('title', 'Invoices'); ?>
<?php $__env->startSection('content'); ?>
<div class="flex justify-between items-center mb-6">
  <h1 class="text-2xl font-bold">Invoices</h1>
  <a href="<?php echo e(route('invoices.create')); ?>" class="bg-indigo-700 text-white px-4 py-2 rounded text-sm">Naya invoice</a>
</div>
<div class="bg-white border rounded-lg overflow-x-auto">
<table class="w-full text-sm">
  <thead class="bg-gray-100 text-left"><tr><th class="p-3">Number</th><th>Customer</th><th>Due</th><th>Total</th><th>Status</th></tr></thead>
  <tbody class="divide-y">
  <?php $__empty_1 = true; $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <td class="p-3"><a class="text-indigo-700 font-medium" href="<?php echo e(route('invoices.show', $i)); ?>"><?php echo e($i->number); ?></a></td>
      <td><?php echo e($i->customer->name); ?></td>
      <td><?php echo e($i->due_date->format('d M Y')); ?></td>
      <td>Rs <?php echo e(number_format($i->total)); ?></td>
      <td><span class="px-2 py-1 rounded text-xs <?php echo e($i->status === 'paid' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-700'); ?>"><?php echo e(ucfirst($i->status)); ?></span></td>
    </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr><td colspan="5" class="p-8 text-center text-gray-500">Koi invoice nahi. Pehla invoice banayein.</td></tr>
  <?php endif; ?>
  </tbody>
</table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/invoices/index.blade.php ENDPATH**/ ?>