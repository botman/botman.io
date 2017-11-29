<nav class="fixed w-full flex items-center justify-between flex-wrap bg-teal h-16 px-6 z-50">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <a href="/{{ config('botman.default_version') }}" class="inline-block align-middle">
        @svg('botman-head', ['class' => 'h-8 w-auto mr-2 -mt-1'])
    </a>
    <div class="align-middle text-white text-2xl tracking-wide md:inline-block">
        BotMan
    </div>
  </div>
  <div class="block md:hidden">
    <button class="js-toggle flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light">
        @svg('close', ['class' => 'js-toggle-close h-3 w-3 hidden'])
        @svg('open', ['class' => 'js-toggle-open h-3 w-3'])
    </button>
  </div>
  <div class="w-full block hidden md:flex md:justify-end md:w-auto md:items-center">
    <a class="btn btn-outline btn-icon text-white text-lg rounded-full hidden md:inline" href="https://github.com/botman/botman">
        @svg('github', ['class' => 'h-4 w-4 fill-none stroke-current'])
    </a>
    <a class="btn btn-outline btn-icon text-white text-lg rounded-full hidden md:inline" href="https://twitter.com/botman_io">
        @svg('twitter', ['class' => 'h-4 w-4 fill-none stroke-current'])
    </a>
    <a class="btn btn-sm btn-outline text-white border border-white hidden md:inline"
        href="https://buildachatbot.io/?utm_source=landing&utm_medium=navigation&utm_campaign=video_course"
        target="_blank"
    >
        Video Course
    </a>
  </div>
</nav>