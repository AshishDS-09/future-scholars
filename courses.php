<?php
$pageTitle = 'Courses | Python, Web Development, AI and App Development';
$pageDescription = 'Explore Future Scholars courses for students, including Python Programming, Web Development, AI, and App Development.';
$pagePath = 'courses';
$activePage = 'courses';
$courses = [
    [
        'category' => 'Coding & Programming Courses',
        'id' => 'scratch-programming',
        'title' => 'Scratch Programming',
        'description' => 'A beginner-friendly visual programming course designed to introduce students to the fundamentals of coding through interactive animations, games, and storytelling projects.',
        'icon' => 'web',
        'url' => 'contact.php?course=scratch-programming',
        'itemsTitle' => 'Students learn:',
        'items' => [
            'Logic building',
            'Sequencing',
            'Loops and conditions',
            'Problem-solving skills',
            'Interactive project creation',
        ],
    ],
    [
        'category' => 'Coding & Programming Courses',
        'id' => 'python-programming',
        'title' => 'Python Programming',
        'description' => 'Python is one of the world\'s most widely used programming languages and an ideal starting point for students entering the world of coding. This course develops strong programming fundamentals and practical problem-solving skills.',
        'icon' => 'python',
        'url' => 'contact.php?course=python-programming',
        'itemsTitle' => 'Key Learning Areas:',
        'items' => [
            'Variables, loops, and conditions',
            'Functions and modular programming',
            'Data structures and logic building',
            'Mini projects and automation tasks',
            'Real-world coding applications',
        ],
    ],
    [
        'category' => 'Coding & Programming Courses',
        'id' => 'web-development',
        'title' => 'Web Development (HTML, CSS & JavaScript)',
        'description' => 'This course teaches students how to design and build modern websites from scratch. Students learn front-end web technologies and create responsive, interactive web applications.',
        'icon' => 'web',
        'url' => 'contact.php?course=web-development',
        'itemsTitle' => 'Key Learning Areas:',
        'items' => [
            'Website structure using HTML',
            'Styling and design using CSS',
            'Interactive functionality with JavaScript',
            'Responsive web design',
            'Portfolio and website projects',
        ],
    ],
    [
        'category' => 'Coding & Programming Courses',
        'id' => 'app-development',
        'title' => 'App Development Fundamentals',
        'description' => 'Students learn the basics of mobile app creation and user interface design using beginner-friendly platforms and frameworks.',
        'icon' => 'app',
        'url' => 'contact.php?course=app-development',
        'itemsTitle' => 'Key Learning Areas:',
        'items' => [
            'Introduction to app development',
            'User interface and user experience basics',
            'Logic building for applications',
            'Interactive mobile applications',
            'Real-world app projects',
        ],
    ],
    [
        'category' => 'Artificial Intelligence',
        'id' => 'artificial-intelligence',
        'title' => 'Introduction to Artificial Intelligence & Machine Learning',
        'description' => 'This foundational AI course introduces students to the concepts of Artificial Intelligence, Machine Learning, and how intelligent systems are transforming industries globally.',
        'icon' => 'ai',
        'url' => 'contact.php?course=artificial-intelligence',
        'itemsTitle' => 'Key Learning Areas:',
        'items' => [
            'Understanding AI and Machine Learning',
            'Real-life AI applications',
            'Smart systems and automation',
            'Data-driven technologies',
            'Ethical use of AI',
        ],
    ],
    [
        'category' => 'Artificial Intelligence',
        'id' => 'generative-ai',
        'title' => 'Generative AI',
        'description' => 'A future-focused course introducing students to Generative AI technologies such as AI content creation, image generation, and intelligent assistants.',
        'icon' => 'ai',
        'url' => 'contact.php?course=generative-ai',
        'itemsTitle' => 'Key Learning Areas:',
        'items' => [
            'Understanding Generative AI',
            'AI tools and productivity',
            'Responsible AI usage',
            'Creative AI applications',
            'Future opportunities in AI',
        ],
    ],
];
include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="page-hero page-hero-visual">
        <div class="container page-hero-grid">
            <div class="page-hero-inner reveal">
                <span class="eyebrow">Courses We Offer</span>
                <h1>Skill-based learning paths for creators, coders, and AI-ready students.</h1>
                <p>Choose focused programs in coding, programming, web development, app development, and artificial intelligence. Every course is built around practical implementation and visible student outcomes.</p>
            </div>
            <div class="image-placeholder reveal" aria-label="Course classroom image placeholder">
                <span>Course image placeholder</span>
            </div>
        </div>
    </section>

    <section class="section soft-section">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Coding & Programming Courses</span>
                <h2>Build logic through hands-on projects.</h2>
            </div>
            <div class="course-grid course-grid-large">
                <?php foreach ($courses as $course) {
                    if ($course['category'] === 'Coding & Programming Courses') {
                        include __DIR__ . '/components/course-card.php';
                    }
                } ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Artificial Intelligence</span>
                <h2>Introduce students to intelligent tools and responsible AI creation.</h2>
            </div>
            <div class="course-grid course-grid-large">
                <?php foreach ($courses as $course) {
                    if ($course['category'] === 'Artificial Intelligence') {
                        include __DIR__ . '/components/course-card.php';
                    }
                } ?>
            </div>
        </div>
    </section>

    <section class="section cta-band">
        <div class="container cta-inner reveal">
            <div>
                <span class="eyebrow">Need guidance?</span>
                <h2>We can help you choose the right course pathway.</h2>
            </div>
            <a class="btn btn-light" href="contact.php">Contact us</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
