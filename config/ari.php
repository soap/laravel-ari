<?php

return [
    'asterisk_ari' => [ 
        'username' => env('ASTERISK_ARI_USER', null),
        'password'=> env('ASTERISK_AGI_PASSWORD', null),
        'host' => env('ASTERISK_ARI_HOST','127.0.0.1'),
        'port' => env('ASTERISK_AGI_PORT', '5000'),
        'endpoint' => env('ASTERISK_ARI_ENDPOINT', '/ari'),
        'transport' => env('ASTERISJ_ARI_ENDPOINT', 'ws') //  ws for none encrypted, wss for encrypted (currently, only ws is supported)
    ],
];