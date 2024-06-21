<?php

return [

    'status' => ['ok' => true, '!ok' => false],
    'code' => [
        'ok' => ['number' => 200, 'message' => 'OK'],
        'badrequest' => ['number' => 400, 'message' => 'Bad Request'],
        'unauthorized' => ['number' => 401, 'message' => 'Unauthorized'],
        'forbidden' => ['number' => 403, 'message' => 'Forbidden'],
        'notfound' => ['number' => 404, 'message' => 'Not Found'],
        'internalservererror' => ['number' => 500, 'message' => 'Internal Server Error']
    ]

];
