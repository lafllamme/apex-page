<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<style>
    body {
        background: url('https://i.pinimg.com/originals/c2/b6/63/c2b6634c484d5e27903b2caa8eb2aea9.gif');
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-color: #464646;
    }

    h2 {
        color: white;
    }
</style>

<body>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tickets</h2>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
    <div class="alert alert-success">
        <p><?php echo e($message); ?></p>
    </div>
    <?php endif; ?>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Vorname</th>
                <th scope="col">Nachname</th>
                <th scope="col">Email</th>
                <th scope="col">Preis</th>
                <th scope="col">Token</th>
                <th scope="col">Message</th>
                <th scope="col">Datum</th>
            </tr>
        </thead>
        <tbody>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td scope="row"><?php echo e(++$i); ?></td>
                <td><?php echo e($product->firstname); ?></td>
                <td><?php echo e($product->lastname); ?></td>
                <td><?php echo e($product->email); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->token); ?></td>
                <td><?php echo e($product->message); ?></td>
                <td><?php echo e($product->created_at); ?></td>
            <tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo $products->links(); ?>


</body>

</html><?php /**PATH /var/www/html/resources/views/index.blade.php ENDPATH**/ ?>