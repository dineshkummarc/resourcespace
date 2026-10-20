<?php

// Get IdP metadata config from resourceDAM config
global $simplesamlconfig;

if (isset($simplesamlconfig['metadata'])) {
    foreach ($simplesamlconfig['metadata'] as $idp => $idpmetadata) {
        $metadata[$idp] = $idpmetadata;
    }
}
