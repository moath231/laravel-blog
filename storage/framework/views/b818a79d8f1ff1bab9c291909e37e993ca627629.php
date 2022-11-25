<?php $__env->startSection('content'); ?>

<?php if(session()->has('message')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">alert!</strong>
        <span class="block sm:inline"><?php echo e(session()->get('message')); ?></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
        </span>
    </div>
<?php endif; ?>


    <div class="container m-auto text-center pt-15 pb-5">
        <h3 class="text-2xl font-bold"><?php echo e($post -> title); ?></h3>
    </div>
    <div class="text-center text-sm">
        BY: <span><?php echo e($post -> user -> name); ?></span>
        : <span><?php echo e(date('d-m-y', strtotime($post -> updated_at))); ?></span>
    </div>

    <div class="mx-auto py-15 px-5">
        <div class="max-w-3xl m-auto sm:max-w-sm">
            <img class="m-auto max-w-3xl sm:max-w-sm" src='../images/<?php echo e($post->img_path); ?>' alt="">
        </div>
        <div class="container text-center m-auto mt-10 max-w-4xl leading-7">
            <?php echo e($post -> discription); ?>

        </div>
        <?php if(Auth::user() && Auth::user()->id == $post->user_id): ?>
        <div class="mx-auto mt-10 max-w-3xl">
            <a
                class="bg-green-400 text-gray-50 py-2 px-5 rounded-lg shadow-lg hover:shadow-none transition duration-500"
                href="<?php echo e($post -> slug); ?>/edit">
                edit
            </a>
            <form
            action="/blog/<?php echo e($post -> slug); ?>"
            method="post"
            class="inline-block ml-2"
            >
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
                <button
                class="bg-red-700 text-gray-50 py-2 px-5 rounded-lg shadow-lg hover:shadow-none transition duration-500 place-self-start"
                href="<?php echo e($post -> slug); ?>/edit"
                value="delete">
                    delete
                </button>
            </form>
        </div>
        <?php endif; ?>
    </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/LaravelBlog/resources/views/blog/singel.blade.php ENDPATH**/ ?>