<nav class="@if(isset($currentVersion)) bg-teal fixed @endif w-full flex items-center justify-between flex-wrap h-16 px-8 z-50">
  <div class="flex items-center flex-no-shrink text-white mr-2 w-4/5 md:w-auto md:flex-grow">
    <div class="flex items-center mr-8">
        <a href="/" class="inline-block align-middle">
            @svg('botman-head', ['class' => 'h-8 w-auto mr-2 -mt-1'])
        </a>
        <div class="font-varela-round hidden align-middle text-white md:inline-block">
            BotMan
        </div>
    </div>
    @if(!isset($isPage) || isset($isPage) && !$isPage)
    <div class="flex items-center md:flex-grow">
        @svg('search', ['class' => 'h-5 w-5 mr-4'])
        <input class="p-2 w-full h-full max-w-md bg-transparent text-white" type="text" placeholder="Search" id="search-input">
    </div>
    @endif
  </div>
  @if(isset($currentVersion))
      <div class="flex md:hidden">
        <button class="js-toggle flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light">
            @svg('close', ['class' => 'js-toggle-close h-3 w-3 hidden'])
            @svg('open', ['class' => 'js-toggle-open h-3 w-3'])
        </button>
      </div>
  @endif
  <div class="w-full block hidden md:flex md:justify-end md:w-auto md:items-center">
      <a class="text-white no-underline hidden md:inline mr-8" href="/partners">
          Partners
      </a>
      <a class="text-white no-underline hidden md:inline mr-8" target="_blank" href="https://slack.botman.io">
          Slack
      </a>
      <a class="text-white no-underline hidden md:inline mr-8" target="_blank" href="https://botman.io/forum">
          Forum
      </a>
      @if(! isset($currentVersion))
        <a class="text-white no-underline hidden md:inline mr-8"
            href="/{{ config('botman.default_version') }}/welcome">
            Documentation
        </a>
      @endif
      <a class="text-white no-underline hidden md:inline mr-8" href="https://playground.botman.io/" target="_blank">
          Playground
      </a>
    <div class="hidden shadow md:inline mr-8 px-4 py-1 rounded-full text-teal bg-white" style="background: #ff7f68">
        <a class="text-white no-underline"
            href="https://course.buildachatbot.io/?utm_source=landing&utm_medium=navigation&utm_campaign=video_course"
            target="_blank"
        >
            Video Course - <span class="font-bold">50% OFF</span>
        </a>
    </div>
    @if(isset($currentVersion))
    <div class="ml-8 px-4 py-2 rounded-full border border-white text-white">
        <select class="js-version-switcher uppercase text-sm bg-transparent text-white appearance-none border-0">
            @foreach(config('botman.available_versions') as $version)
                <option {{ ($version == $currentVersion) ? 'selected' : ''  }} value="{{ $version }}" class="text-black">
                    {{ $version }}
                </option>
            @endforeach
        </select>
        <span>&#9662;</span>
    </div>
    @endif
  </div>
</nav>