<nav class="fixed w-full flex items-center justify-between flex-wrap bg-teal h-16 p-6 z-50">
  <div class="flex items-center flex-no-shrink text-white mr-6">
    <a href="/{{ config('botman.default_version') }}" class="inline-block align-middle">
        @svg('botman-head', ['class' => 'h-8 w-auto mr-2 -mt-1'])
    </a>
    <div class="align-middle text-white text-2xl tracking-wide md:inline-block">
        BotMan
    </div>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
        <svg class="h-3 w-3" viewBox="0 0 20 20" version="1.1"
            xmlns="http://www.w3.org/2000/svg">
            <line x1="1" y1="20" 
                x2="20" y2="1" 
                stroke="white" 
                stroke-width="1"/>
            <line x1="1" y1="1" 
                x2="20" y2="20" 
                stroke="white" 
                stroke-width="1"/>
        </svg>
      <svg class="h-3 w-3 hidden" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow hidden lg:flex lg:justify-end lg:w-auto">
    <a class="btn text-white text-lg hidden md:inline" href="https://github.com/botman/botman">
        <i class="fa fa-github"></i>
    </a>
    <a class="btn text-white text-lg hidden md:inline" href="https://twitter.com/botman_io">
        <i class="fa fa-twitter"></i>
    </a>
    <a class="btn text-white btn-rounded-hover border border-teal-light rounded-full
        hover:bg-teal-light"
        href="/{{ config('botman.default_version') }}">
        Documentation
    </a>
    <a class="btn btn-outline text-white border border-white hidden md:inline"
        href="https://buildachatbot.io/?utm_source=landing&utm_medium=navigation&utm_campaign=video_course"
        target="_blank">
        Video Course
    </a>
  </div>
</nav>