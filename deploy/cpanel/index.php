<?php

declare(strict_types=1);

header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');
header('Permissions-Policy: camera=(), microphone=(), geolocation=()');

$templatePath = __DIR__ . '/portfolio.template.html';

if (!is_file($templatePath)) {
    http_response_code(500);
    exit('Portfolio template is missing.');
}

$template = file_get_contents($templatePath);

if ($template === false) {
    http_response_code(500);
    exit('Portfolio could not be loaded.');
}

$scriptDirectory = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
$basePath = $scriptDirectory === '/' ? '' : rtrim($scriptDirectory, '/');

$replacements = [
    "{{ asset('assets/css/app.css') }}" => $basePath . '/assets/css/app.css',
    "{{ asset('assets/images/qurbani-emrahov.png') }}" => $basePath . '/assets/images/qurbani-emrahov.png',
    "{{ asset('assets/js/app.js') }}" => $basePath . '/assets/js/app.js',
    "{{ date('Y') }}" => date('Y'),
];

echo str_replace(array_keys($replacements), array_values($replacements), $template);

