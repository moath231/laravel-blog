<?php $__env->startSection('content'); ?>
  
  <div class="hero-page-img flex flex-col items-center justify-center">
    <h1 class="text-gray-100 text-5xl uppercase font-bold py-10 text-center">welcome to my blog</h1>
    <a href="/" class="bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl">Start Reading</a>
  </div>

  
  <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">

    <div class="mx-2 md:mx-0">
      <img class="sm:rounded-lg" src="http://picsum.photos/id/239/960/620" alt="">
    </div>

    <div class="flex flex-col items-left justify-center">
      <h2 class="font-bold uppercase text-4xl text-gray-400">how to be expert in 2022</h2>
      <p class="font-bold text-gray-600 text-xl pt-2">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
      </p>
      <p class="py-4 text-gray-500 text-sm leading-5">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est dolore dolores ipsa esse hic ipsum voluptatem nobis
        iusto eum. Impedit harum ipsam perferendis illo consectetur aliquam vel reiciendis ullam numquam.
      </p>
      <a class="bg-gray-400 p-3 place-self-start rounded-lg font-bold text-l uppercase text-gray-100" href="">read
        more</a>
    </div>
  </div>

  
  <div class="text-center p-15 bg-gray-700 text-gray-100">
    <h2 class="text-2xl">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
      <div class="font-bold text-2xl py-2">UX Design Thinking</div>
      <div class="font-bold text-2xl py-2">Programming languages</div>
      <div class="font-bold text-2xl py-2">Graphic Design</div>
      <div class="font-bold text-2xl py-2">Front-end Development</div>
    </div>
  </div>

  
  <div class="container mx-auto text-center py-15">
    <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
    <p class="text-gray-400 leading-6 px-10">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste.
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis illo doloremque vero dolor. Quidem nostrum
      animi nesciunt blanditiis!
    </p>
  </div>

  
  <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
      <div class="block m-auto pt-4 pb-15 w-4/5">
        <ul class="md:flex text-xs gap-2">
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">php</a></li>
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">programming</a></li>
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">language</a></li>
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">backend</a></li>
        </ul>
        <h3 class="text-l py-10 leading-6">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus optio nihil error id, ratione rerum illo
          repellat laboriosam placeat suscipit corrupti, veniam earum? Alias unde quidem excepturi repellat iste magni!
        </h3>
      </div>
    </div>
    <div class="flex">
        <img class="sm:rounded" src="http://picsum.photos/id/242/960/620" alt="">
      </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/LaravelBlog/resources/views/index.blade.php ENDPATH**/ ?>