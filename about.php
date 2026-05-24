<?php
$pageTitle = 'About SBT Ed Tech Pvt Ltd | Future-Ready Technology Learning';
$pageDescription = 'SBT Ed Tech Pvt Ltd transforms education through coding, AI, app development, web development, and project-based learning for Classes 4-12.';
$pagePath = 'about';
$activePage = 'about';

$coreValues = [
    ['title' => 'Innovation First', 'text' => 'Encouraging creativity and problem-solving through technology.'],
    ['title' => 'Practical Learning', 'text' => 'Focusing on implementation rather than rote memorization.'],
    ['title' => 'Future Readiness', 'text' => 'Preparing students for emerging careers and digital transformation.'],
    ['title' => 'Student Empowerment', 'text' => 'Building confidence through real-world projects and achievements.'],
    ['title' => 'Collaborative Growth', 'text' => 'Partnering with schools for long-term educational success.'],
];

$whyChoose = [
    'Industry-relevant Coding & AI curriculum',
    'Project-based and activity-driven learning approach',
    'Experienced trainers and structured learning methodology',
    'Competition and Olympiad preparation support',
    'NEP 2020 aligned skill-based education',
    'Continuous academic and technical support for schools',
    'Focus on creativity, innovation, and experiential learning',
];

$studentsBuild = [
    'Interactive websites',
    'AI-powered applications',
    'Digital portfolios',
    'Games and simulations',
    'Innovation showcase projects',
    'Real-world problem-solving solutions',
];

$preparationAreas = [
    'Coding competitions',
    'AI challenges',
    'Innovation contests',
    'Robotics competitions',
    'Olympiads and Hackathons',
    'Presentation and project mentoring',
];

include __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="page-hero page-hero-visual">
        <div class="container page-hero-grid">
            <div class="page-hero-inner reveal">
                <span class="eyebrow">About Us</span>
                <h1>Transforming education through technology-driven learning.</h1>
                <p>At SBT Ed Tech Pvt Ltd, we prepare students for the future with practical digital skills in Coding, Artificial Intelligence, App Development, Web Development, and emerging technologies.</p>
            </div>
            <div class="image-placeholder reveal" aria-label="About SBT Ed Tech image placeholder">
                <span>About image placeholder</span>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split-grid">
            <div class="section-copy reveal">
                <span class="eyebrow">Learn · Build · Transform</span>
                <h2>Students learn best when they create, experiment, and solve real problems.</h2>
                <p>Built on the philosophy of Learn · Build · Transform, our programs move beyond traditional theoretical education and introduce students to hands-on, project-based learning.</p>
                <p>Our curriculum is designed for students from Classes 4-12 and aligned with the goals of the National Education Policy (NEP) 2020. Through age-appropriate learning pathways, students gradually develop computational thinking, creativity, analytical reasoning, communication skills, and digital confidence.</p>
                <p>At SBT Ed Tech, students do not simply study technology. They build with it, from games and websites to AI-powered applications and interactive projects.</p>
            </div>
            <div class="highlight-panel reveal">
                <span class="eyebrow">For schools</span>
                <h3>Future-ready learning ecosystems</h3>
                <p>We partner with schools to foster innovation, curiosity, and skill development while strengthening academic excellence, student engagement, and parent confidence.</p>
            </div>
        </div>
    </section>

    <section class="section soft-section">
        <div class="container">
            <div class="section-heading reveal">
                <span class="eyebrow">Our Core Values</span>
                <h2>Principles that shape every learning experience.</h2>
            </div>
            <div class="values-grid">
                <?php foreach ($coreValues as $value) : ?>
                    <article class="feature-card reveal">
                        <span><?php echo htmlspecialchars($value['title'], ENT_QUOTES, 'UTF-8'); ?></span>
                        <p><?php echo htmlspecialchars($value['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split-grid">
            <div class="section-copy reveal">
                <span class="eyebrow">Why Choose SBT Ed Tech?</span>
                <h2>Structured support for schools and students.</h2>
                <p>Our mission is simple yet powerful: to nurture a generation of creators, innovators, and technology leaders who are ready to shape the future confidently.</p>
            </div>
            <ul class="check-list reveal">
                <?php foreach ($whyChoose as $item) : ?>
                    <li><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <section class="section soft-section">
        <div class="container split-grid">
            <div class="image-placeholder tall-placeholder reveal" aria-label="Project-based learning image placeholder">
                <span>Project showcase image placeholder</span>
            </div>
            <div class="section-copy reveal">
                <span class="eyebrow">Project-Based Learning Programs</span>
                <h2>Concepts become confidence through practical implementation.</h2>
                <p>Our project-based learning model ensures students apply concepts through practical implementation and innovation-driven activities.</p>
                <h3>Students Build:</h3>
                <ul class="check-list compact-list">
                    <?php foreach ($studentsBuild as $item) : ?>
                        <li><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container split-grid">
            <div class="section-copy reveal">
                <span class="eyebrow">Competition & Innovation Preparation</span>
                <h2>Helping students gain confidence, recognition, and exposure.</h2>
                <p>We prepare students for national and international technology competitions with guided mentoring, project presentation support, and innovation-focused practice.</p>
            </div>
            <ul class="check-list reveal">
                <?php foreach ($preparationAreas as $item) : ?>
                    <li><?php echo htmlspecialchars($item, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
