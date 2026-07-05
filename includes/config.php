<?php

$documentRoot = realpath($_SERVER['DOCUMENT_ROOT'] ?? '');
$projectRoot  = realpath(__DIR__ . '/..');

$documentRoot = $documentRoot
    ? str_replace('\\', '/', $documentRoot)
    : '';

$projectRoot = $projectRoot
    ? str_replace('\\', '/', $projectRoot)
    : '';

$baseUrl = '';

if ($documentRoot !== '' && $projectRoot !== '') {
    if (str_starts_with($projectRoot, $documentRoot)) {
        $baseUrl = substr(
            $projectRoot,
            strlen($documentRoot)
        );
    }
}

$baseUrl = str_replace('\\', '/', $baseUrl);
$baseUrl = '/' . trim($baseUrl, '/');

if ($baseUrl === '/') {
    $baseUrl = '';
}

define('BASE_URL', $baseUrl);

function url(string $path = ''): string
{
    $path = ltrim($path, '/');

    if ($path === '') {
        return BASE_URL !== ''
            ? BASE_URL . '/'
            : '/';
    }

    return BASE_URL . '/' . $path;
}

function redirect(string $path): void
{
    header('Location: ' . url($path));
    exit;
}
