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
        <div class="w-2/3 text-right md:py-2 invisible sm:invisible md:visible">
            <a class="btn btn-icon-landing btn-rounded-hover border border-teal-light mr-4  text-white text-lg
                rounded-full hidden md:inline-block align-middle hover:bg-teal-light"
                href="https://github.com/botman/botman">
                @svg('github', ['class' => 'h-4 w-4 fill-none stroke-current'])
            </a>
            <a class="btn btn-icon-landing btn-rounded-hover border border-teal-light mr-4 text-white text-lg
                rounded-full hidden md:inline-block align-middle hover:bg-teal-light"
                href="https://twitter.com/botman_io">
                @svg('twitter', ['class' => 'h-4 w-4 fill-none stroke-current'])
            </a>
            <a class="btn text-white btn-rounded-hover border border-teal-light rounded-full
                hover:bg-teal-light mr-4"
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