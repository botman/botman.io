<?php

return [

    'available_versions' => [
        '2.0',
        '1.5',
        '1.4',
        'master',
    ],

    'default_version' => '2.0',

    // Public base URL of the bucket that holds public/studio/*.zip (downloaded by the BotMan installer).
    'studio_download_url' => env('STUDIO_DOWNLOAD_URL', env('AWS_URL', '')),

];
