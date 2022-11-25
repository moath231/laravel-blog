<?php $__env->startSection('content'); ?>

<?php if(session()->has('message')): ?>
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">alert!</strong>
        <span class="block sm:inline"><?php echo e(session()->get('message')); ?></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
<?php endif; ?>




    <div class="container m-auto text-center pt-15 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
    </div>

    <?php if(Auth::check()): ?>
        <div class="sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/create">add new blog</a>
        </div>
    <?php endif; ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $po): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <div class="">
                <img class=" h-22" src='images/<?php echo e($po->img_path); ?>' alt="">
            </div>

            <div>
                <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0"><?php echo e($po -> title); ?></h2>
                <span class="text-gray-500 italic">
                BY: <span><?php echo e($po -> user -> name); ?></span>
                ON: <span><?php echo e(date('d-m-y', strtotime($po -> updated_at))); ?></span>
                <p class="text-l text-gray-700 py-8 leading-6">
                    <?php echo e($po -> discription); ?>

                </p>
                <a class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l place-self-start" href="/blog/<?php echo e($po -> slug); ?>">read more</a>
                </span>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/LaravelBlog/resources/views/blog/index.blade.php ENDPATH**/ ?>