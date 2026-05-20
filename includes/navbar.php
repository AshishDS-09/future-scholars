<?php
$navItems = [
    'home' => ['label' => 'Home', 'url' => './'],
    'about' => ['label' => 'About', 'url' => 'about'],
    'courses' => ['label' => 'Courses', 'url' => 'courses'],
    'contact' => ['label' => 'Contact', 'url' => 'contact'],
];
?>
<header class="site-header" data-header>
    <nav class="container navbar" aria-label="Primary navigation">
        <a class="brand" href="./" aria-label="Future Scholars home">
            <img src="assets/images/future-scholars-logo.svg" width="54" height="54" alt="Future Scholars logo">
            <span>Future <strong>Scholars</strong></span>
        </a>
        <button class="nav-toggle" type="button" data-nav-toggle aria-label="Toggle navigation" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
        <div class="nav-menu" data-nav-menu>
            <?php foreach ($navItems as $key => $item) : ?>
                <a class="<?php echo $activePage === $key ? 'active' : ''; ?>" href="<?php echo htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
                </a>
            <?php endforeach; ?>
            <!-- <a class="btn btn-small" href="contact">Free counselling</a> -->
        </div>
    </nav>
</header>
