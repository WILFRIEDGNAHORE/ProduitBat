<?php

return [
    'baseUrl'              => env('MOMO_BASE_URL', 'https://sandbox.momodeveloper.mtn.com'),
    'currency'             => env('MOMO_CURRENCY', 'EUR'),
    'targetEnvironment'    => env('MOMO_TARGET_ENVIRONMENT', 'sandbox'),
    'collectionPrimaryKey' => env('MOMO_COLLECTION_PRIMARY_KEY', ''),
    'collectionUserId'     => env('MOMO_COLLECTION_USER_ID', ''),
    'collectionApiSecret'  => env('MOMO_COLLECTION_API_SECRET', ''),
];