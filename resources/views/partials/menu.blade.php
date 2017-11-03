<div class="h-24 w-full">
    <div class="flex flex-wrap p-4">
        <div class="w-1/3">
            <a href="/{{ config('botman.default_version') }}" class="inline-block align-middle">
                @svg('botman-head', ['class' => 'h-12 w-auto mr-2'])
            </a>
            <div class="align-middle mt-2 text-white text-2xl tracking-wide hidden md:inline-block">
                BotMan
            </div>
        </div>
        <div class="hidden"></div>
        <div class="w-2/3 text-right md:py-2">
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
    </div>
</div>