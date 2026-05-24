<?php
$navItems = [
    'home' => ['label' => 'Home', 'url' => 'index.php'],
    'about' => ['label' => 'About', 'url' => 'about.php'],
    'courses' => ['label' => 'Courses', 'url' => 'courses.php'],
    'contact' => ['label' => 'Contact', 'url' => 'contact.php'],
];
?>
<header class="site-header" data-header>
    <nav class="container navbar" aria-label="Primary navigation">
        <a class="brand" href="index.php" aria-label="SBT Ed Tech home">
            <img class="brand-logo" src="assets/images/sbt-ed-tech-logo.png" width="72" height="52" alt="SBT Ed Tech logo">
            <span>SBT <strong>Ed Tech</strong></span>
        </a>
        <button class="nav-toggle" type="button" data-nav-toggle aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <div class="nav-menu" data-nav-menu>
            <?php foreach ($navItems as $key => $item) : ?>
                <a class="<?php echo $activePage === $key ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>"<?php echo $activePage === $key ? ' aria-current="page"' : ''; ?>>
                    <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php endforeach; ?>
            <button class="theme-toggle" type="button" data-theme-toggle aria-label="Switch to night mode" aria-pressed="false">
                <span class="theme-toggle-icon" aria-hidden="true"></span>
            </button>
        </div>
    </nav>
</header>
