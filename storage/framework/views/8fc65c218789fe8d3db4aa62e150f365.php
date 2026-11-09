<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
  <div class="bg-white border rounded-lg p-4"><div class="text-sm text-gray-500">Mila hua (paid)</div><div class="text-2xl font-semibold text-green-700">Rs <?php echo e(number_format($totalPaid)); ?></div></div>
  <div class="bg-white border rounded-lg p-4"><div class="text-sm text-gray-500">Baqaya (unpaid)</div><div class="text-2xl font-semibold text-red-600">Rs <?php echo e(number_format($totalUnpaid)); ?></div></div>
  <div class="bg-white border rounded-lg p-4"><div class="text-sm text-gray-500">Invoices</div><div class="text-2xl font-semibold"><?php echo e($invoiceCount); ?></div></div>
  <div class="bg-white border rounded-lg p-4"><div class="text-sm text-gray-500">Customers</div><div class="text-2xl font-semibold"><?php echo e($customerCount); ?></div></div>
</div>
<div class="bg-white border rounded-lg p-4">
  <div class="font-medium mb-3">Mahana sales (paid invoices)</div>
  <canvas id="sales" height="90"></canvas>
</div>
<script>
new Chart(document.getElementById('sales'), {
  type: 'bar',
  data: { labels: <?php echo json_encode($labels, 15, 512) ?>, datasets: [{ label: 'Rs', data: <?php echo json_encode($sales, 15, 512) ?>, backgroundColor: '#4338ca' }] },
  options: { plugins: { legend: { display: false } }, scales: { y: { beginAtZero: true } } }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/dashboard.blade.php ENDPATH**/ ?>