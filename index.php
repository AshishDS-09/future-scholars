<?php
$pageTitle = 'Future Scholars | Coding and AI Courses for Students';
$pageDescription = 'Future Scholars is a premium EdTech platform helping students learn coding, AI, web development, and app development with confidence.';
$pagePath = '';
$activePage = 'home';

$courses = [
    [
        'title' => 'Python Programming',
        'description' => 'Build logic, solve problems, and create useful programs with beginner-friendly Python lessons.',
        'icon' => 'python',
        'url' => 'courses.php#python-programming',
    ],
    [
        'title' => 'Web Development',
        'description' => 'Learn HTML, CSS, and JavaScript by making responsive websites and interactive projects.',
        'icon' => 'web',
        'url' => 'courses.php#web-development',
    ],
    [
        'title' => 'Artificial Intelligence (AI)',
        'description' => 'Explore smart tools, prompts, automation, and ethical AI through age-ready activities.',
        'icon' => 'ai',
        'url' => 'courses.php#artificial-intelligence',
    ],
    [
        'title' => 'App Development',
        'description' => 'Design app screens, understand user flows, and turn ideas into practical mobile concepts.',
        'icon' => 'app',
        'url' => 'courses.php#app-development',
    ],
];

include __DIR__ . '/includes/header.php';
include __DIR__ . '/components/hero-section.php';
?>

<main id="main-content">
    <section class="section about-preview">
        <div class="container split-grid">
            <div class="section-copy reveal">
                <span class="eyebrow">Built for curious students</span>
                <h2>Modern technology learning for students.</h2>
                <p>Future Scholars blends guided teaching, creative projects, and strong fundamentals so young learners understand technology instead of only using it.</p>
                <a class="text-link" href="about.php">Learn about SBT Ed Tech</a>
            </div>
            <div class="stat-panel reveal" aria-label="Future Scholars learning highlights">
                <div>
                    <strong>4</strong>
                    <span>future-ready tracks</span>
                </div>
                <div>
                    <strong>All</strong>
                    <span>student level focus</span>
                </div>
                <div>
                    <strong>1:1</strong>
                    <span>mentor attention</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section soft-section">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Course preview</span>
                <h2>Skills that turn screen time into creation time.</h2>
                <p>Each course is structured around small wins, clear practice, and projects students can proudly explain.</p>
            </div>
            <div class="course-grid">
                <?php foreach ($courses as $course) {
                    include __DIR__ . '/components/course-card.php';
                } ?>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/components/feature-section.php'; ?>

    <section class="section testimonials">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Parent voices</span>
                <h2>Confidence you can see after every project.</h2>
            </div>
            <div class="testimonial-grid">
                <article class="testimonial-card reveal">
                    <p>"My son now explains how websites work and creates small pages on his own. The classes are polished, patient, and very engaging."</p>
                    <strong>Priya M.</strong>
                    <span>Parent of a student</span>
                </article>
                <article class="testimonial-card reveal">
                    <p>"The AI sessions helped my daughter ask better questions and think creatively. She looks forward to each class."</p>
                    <strong>Rohit S.</strong>
                    <span>Parent of a student</span>
                </article>
                <article class="testimonial-card reveal">
                    <p>"Future Scholars makes technology feel approachable. The projects are meaningful without overwhelming younger students."</p>
                    <strong>Ananya K.</strong>
                    <span>Parent of a student</span>
                </article>
            </div>
        </div>
    </section>

    <section class="section cta-band">
        <div class="container cta-inner reveal">
            <div>
                <span class="eyebrow">Start strong</span>
                <h2>Give your child a confident start in coding and AI.</h2>
            </div>
            <a class="btn btn-light" href="contact.php">Book a free counselling call</a>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
