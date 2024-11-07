<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Appwrite Endpoint
    |--------------------------------------------------------------------------
    |
    | This value is the endpoint of your Appwrite server. It should include the
    | protocol and the URL where your Appwrite server is hosted.
    |
    */

    'endpoint' => env('APPWRITE_ENDPOINT', 'https://cloud.appwrite.io/v1'),

    /*
    |--------------------------------------------------------------------------
    | Appwrite Project ID
    |--------------------------------------------------------------------------
    |
    | The unique identifier of your Appwrite project. This is used to
    | associate your API requests with the correct project.
    |
    */

    'project_id' => env('APPWRITE_PROJECT_ID'),

    /*
    |--------------------------------------------------------------------------
    | Appwrite API Key
    |--------------------------------------------------------------------------
    |
    | Your Appwrite API key is used to authenticate requests to the Appwrite
    | server. Ensure that this key is kept secret and not exposed publicly.
    |
    */

    'api_key' => env('APPWRITE_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Appwrite Database ID
    |--------------------------------------------------------------------------
    |
    | The ID of the database you want to interact with in Appwrite. This is
    | used for performing database operations like creating, reading, updating,
    | and deleting documents.
    |
    */

    'database_id' => env('APPWRITE_PROJECT_DATABASE'),
];
