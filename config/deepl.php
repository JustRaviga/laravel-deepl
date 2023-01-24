<?php

return [
    'api_key'         => env('DEEPL_API_KEY'),
    'source_language' => 'EN',
    'lang_directory'  => realpath(base_path('resources/lang')),
];
