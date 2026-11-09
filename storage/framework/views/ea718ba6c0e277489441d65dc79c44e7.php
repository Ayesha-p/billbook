<?php $__env->startSection('title', $invoice->number); ?>
<?php $__env->startSection('content'); ?>
<div class="flex flex-wrap gap-3 justify-between items-center mb-6">
  <h1 class="text-2xl font-bold"><?php echo e($invoice->number); ?></h1>
  <div class="flex gap-2 text-sm">
    <a href="<?php echo e(route('invoices.pdf', $invoice)); ?>" class="bg-indigo-700 text-white px-4 py-2 rounded">PDF download</a>
    <?php if($invoice->status === 'unpaid'): ?>
      <form method="POST" action="<?php echo e(route('invoices.paid', $invoice)); ?>"><?php echo csrf_field(); ?> <?php echo method_field('PATCH'); ?><button class="bg-green-600 text-white px-4 py-2 rounded">Paid mark karein</button></form>
    <?php endif; ?>
    <form method="POST" action="<?php echo e(route('invoices.destroy', $invoice)); ?>" onsubmit="return confirm('Invoice delete karein?')"><?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?><button class="border border-red-300 text-red-600 px-4 py-2 rounded">Delete</button></form>
  </div>
</div>
<div class="bg-white border rounded-lg p-6 max-w-3xl">
  <div class="flex justify-between mb-6">
    <div><div class="text-sm text-gray-500">Bill to</div><div class="font-medium"><?php echo e($invoice->customer->name); ?></div><div class="text-sm text-gray-500"><?php echo e($invoice->customer->address); ?></div></div>
    <div class="text-sm text-right">Issue: <?php echo e($invoice->issue_date->format('d M Y')); ?><br>Due: <?php echo e($invoice->due_date->format('d M Y')); ?><br>Status: <b><?php echo e(ucfirst($invoice->status)); ?></b></div>
  </div>
  <table class="w-full text-sm">
    <thead class="border-b text-left"><tr><th class="py-2">Tafseel</th><th>Qty</th><th>Price</th><th class="text-right">Total</th></tr></thead>
    <tbody>
    <?php $__currentLoopData = $invoice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr class="border-b"><td class="py-2"><?php echo e($it->description); ?></td><td><?php echo e($it->qty); ?></td><td><?php echo e(number_format($it->unit_price)); ?></td><td class="text-right"><?php echo e(number_format($it->line_total)); ?></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <div class="text-right mt-4 text-lg font-semibold">Total: Rs <?php echo e(number_format($invoice->total)); ?></div>
  <?php if($invoice->notes): ?><p class="mt-4 text-sm text-gray-600"><?php echo e($invoice->notes); ?></p><?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/invoices/show.blade.php ENDPATH**/ ?>