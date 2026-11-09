<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
  body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #222; }
  h1 { margin: 0; color: #312e81; }
  table { width: 100%; border-collapse: collapse; margin-top: 20px; }
  th { background: #eef2ff; text-align: left; }
  th, td { padding: 8px; border-bottom: 1px solid #ddd; }
  .r { text-align: right; }
  .total { margin-top: 16px; text-align: right; font-size: 15px; font-weight: bold; }
</style>
</head>
<body>
  <h1>INVOICE</h1>
  <p><?php echo e($invoice->number); ?> &nbsp;|&nbsp; Status: <?php echo e(strtoupper($invoice->status)); ?></p>
  <p><b>Bill to:</b> <?php echo e($invoice->customer->name); ?><br><?php echo e($invoice->customer->address); ?><br><?php echo e($invoice->customer->phone); ?></p>
  <p>Issue: <?php echo e($invoice->issue_date->format('d M Y')); ?> &nbsp; Due: <?php echo e($invoice->due_date->format('d M Y')); ?></p>
  <table>
    <thead><tr><th>Description</th><th>Qty</th><th class="r">Price</th><th class="r">Total</th></tr></thead>
    <tbody>
    <?php $__currentLoopData = $invoice->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $it): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr><td><?php echo e($it->description); ?></td><td><?php echo e($it->qty); ?></td><td class="r"><?php echo e(number_format($it->unit_price)); ?></td><td class="r"><?php echo e(number_format($it->line_total)); ?></td></tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  <div class="total">Total: Rs <?php echo e(number_format($invoice->total)); ?></div>
  <?php if($invoice->notes): ?><p><?php echo e($invoice->notes); ?></p><?php endif; ?>
</body>
</html>
<?php /**PATH C:\Users\Ayesha\Downloads\brigthnivo\billbook\resources\views/invoices/pdf.blade.php ENDPATH**/ ?>