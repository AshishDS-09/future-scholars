<?php
$pageTitle = 'About Future Scholars | Premium EdTech for Young Learners';
$pageDescription = 'Learn how Future Scholars teaches coding, AI, web development, and app development to students through guided projects.';
$pagePath = 'about';
$activePage = 'about';
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container page-hero-inner reveal">
            <span class="eyebrow">About Future Scholars</span>
            <h1>Technology education designed for young minds.</h1>
            <p>We help students move from passive digital use to active creation through practical, age-ready learning paths.</p>
        </div>
    </section>

    <section class="section">
        <div class="container split-grid">
            <div class="section-copy reveal">
                <span class="eyebrow">Our mission</span>
                <h2>Make advanced skills understandable, exciting, and useful.</h2>
                <p>Future Scholars focuses on students who are ready to build logic, creativity, communication, and responsible technology habits. Every class connects concepts to visible outcomes.</p>
                <p>Students learn by building websites, writing programs, planning apps, and exploring AI with safe, guided instruction.</p>
            </div>
            <div class="values-list reveal">
                <article>
                    <h3>Concept-first teaching</h3>
                    <p>Students understand why code works before memorizing syntax.</p>
                </article>
                <article>
                    <h3>Project-based practice</h3>
                    <p>Each module ends with a useful creation students can present.</p>
                </article>
                <article>
                    <h3>Premium student care</h3>
                    <p>Small batches and mentor feedback keep progress personal.</p>
                </article>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/components/feature-section.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
