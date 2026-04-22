<?php

// Extract slug from path: /go/card -> "card"
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$slug = trim(str_replace('/go/', '', $path), '/');

// Load and parse redirects config
$config_path = __DIR__ . '/../redirects.json';
$redirects = [];

if (is_readable($config_path)) {
    $json = file_get_contents($config_path);
    $decoded = json_decode($json, true);
    if (is_array($decoded)) {
        $redirects = $decoded;
    }
}

// Look up slug; fall back to site root if missing or empty
$target = isset($redirects[$slug]) && is_string($redirects[$slug]) && $redirects[$slug] !== ''
    ? $redirects[$slug]
    : '/';

// 302 because destinations may change
header('Location: ' . $target, true, 302);
exit;
