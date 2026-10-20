<?php

// Copy to config.php in this folder, or the main resourceDAM config.php file.

$api_webhooks_urls = [
    [
    "location" => "edit",
    "buttontext" => "Fetch object data from CMS",
    "url" => "https://rhss.info/resourceDAM/some_script.abc?resource_id="
     ]
    ,
    [
    "location" => "edit",
    "buttontext" => "Push image to CMS",
    "url" => "https://rhss.info/resourceDAM/another_script.abc?resource_id=",
    "hash" => "xyzxyz" // Optional hash for security
    ]
];
