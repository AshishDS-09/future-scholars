<?php
declare(strict_types=1);

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$siteName = 'Future Scholars';
$baseUrl = '';
$canonicalPath = $pagePath ?? '';
$canonicalUrl = rtrim($baseUrl, '/') . '/' . ltrim($canonicalPath, '/');
$canonicalUrl = $canonicalUrl === '/' ? '/' : $canonicalUrl;
$pageTitle = $pageTitle ?? 'Future Scholars';
$pageDescription = $pageDescription ?? 'Future Scholars offers premium technology education for students.';
$activePage = $activePage ?? '';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="assets/images/future-scholars-logo.svg">
    <meta name="theme-color" content="#123f7a" data-theme-color>
    <script>
    (function () {
        try {
            var savedTheme = localStorage.getItem('futureScholarsTheme');
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            var theme = savedTheme || (prefersDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
        } catch (error) {
            document.documentElement.setAttribute('data-theme', 'light');
        }
    })();
    </script>
    <link rel="preload" href="assets/css/style.css" as="style">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/enhancements.css">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "Future Scholars",
        "description": "Premium coding, AI, web development, and app development courses for students.",
        "url": "",
        "logo": "assets/images/future-scholars-logo.svg",
        "sameAs": []
    }
    </script>
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <?php include __DIR__ . '/navbar.php'; ?>
