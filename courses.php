<?php
$pageTitle = 'Courses | Python, Web Development, AI and App Development';
$pageDescription = 'Explore Future Scholars courses for students, including Python Programming, Web Development, AI, and App Development.';
$pagePath = 'courses';
$activePage = 'courses';
$courses = [
    [
        'id' => 'python-programming',
        'title' => 'Python Programming',
        'description' => 'Students learn variables, conditions, loops, functions, and problem-solving by creating games, calculators, and automation projects.',
        'icon' => 'python',
        'url' => 'contact?course=python',
    ],
    [
        'id' => 'web-development',
        'title' => 'Web Development',
        'description' => 'A practical path through HTML5, CSS3, responsive layouts, and JavaScript interactions for real website creation.',
        'icon' => 'web',
        'url' => 'contact?course=web',
    ],
    [
        'id' => 'artificial-intelligence',
        'title' => 'Artificial Intelligence (AI)',
        'description' => 'Students explore AI concepts, prompt writing, safe usage, pattern recognition, and creative AI-assisted projects.',
        'icon' => 'ai',
        'url' => 'contact?course=ai',
    ],
    [
        'id' => 'app-development',
        'title' => 'App Development',
        'description' => 'Students learn app planning, interface thinking, user journeys, and prototype logic for mobile-first ideas.',
        'icon' => 'app',
        'url' => 'contact?course=app',
    ],
];
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container page-hero-inner reveal">
            <span class="eyebrow">Courses</span>
            <h1>Structured learning tracks for future-ready students.</h1>
            <p>Choose a focused path or combine tracks to build a strong foundation in modern technology.</p>
        </div>
    </section>

    <section class="section soft-section">
        <div class="container">
            <div class="course-grid course-grid-large">
                <?php foreach ($courses as $course) {
                    include __DIR__ . '/components/course-card.php';
                } ?>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
