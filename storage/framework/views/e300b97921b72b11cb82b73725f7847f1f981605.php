



<?php $__env->startSection('container'); ?>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <article class="mb-5">
        <h2>
            <a href="/posts/<?php echo e($post["slug"]); ?>">
            <?php echo e($post["title"]); ?>

            </a>
        </h2>
        <h5>By: <?php echo e($post["author"]); ?></h5>
        <p><?php echo e($post ["body"]); ?></p>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PRESUNIV\a Semester 4\server side\Laravel\applications\ProjectSSIP\resources\views/posts.blade.php ENDPATH**/ ?>