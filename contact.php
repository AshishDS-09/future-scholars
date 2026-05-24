<?php
$pageTitle = 'Contact Future Scholars | Book a Counselling Call';
$pageDescription = 'Contact Future Scholars to enquire about coding, AI, web development, and app development courses for students.';
$pagePath = 'contact';
$activePage = 'contact';
include __DIR__ . '/includes/header.php';

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$formErrors = $_SESSION['form_errors'] ?? [];
$formOld = $_SESSION['form_old'] ?? [];
$formSuccess = $_SESSION['form_success'] ?? '';
unset($_SESSION['form_errors'], $_SESSION['form_old'], $_SESSION['form_success']);

$courseLabels = [
    'scratch-programming' => 'Scratch Programming',
    'python-programming' => 'Python Programming',
    'web-development' => 'Web Development (HTML, CSS & JavaScript)',
    'app-development' => 'App Development Fundamentals',
    'artificial-intelligence' => 'Introduction to Artificial Intelligence & Machine Learning',
    'generative-ai' => 'Generative AI',
];
$requestedCourse = is_string($_GET['course'] ?? null) ? trim((string) $_GET['course']) : '';
$requestedCourseLabel = $courseLabels[$requestedCourse] ?? '';
if ($requestedCourseLabel && empty($formOld['message'])) {
    $formOld['message'] = 'I am interested in ' . $requestedCourseLabel . '. Please share details.';
}
?>

<main id="main-content">
    <section class="page-hero">
        <div class="container page-hero-inner reveal">
            <span class="eyebrow">Contact us</span>
            <h1>Book a free counselling call.</h1>
            <p>Share a few details and our academic advisor will help you choose the right learning path.</p>
        </div>
    </section>

    <section class="section">
        <div class="container contact-grid">
            <div class="contact-panel reveal">
                <h2>Future Scholars</h2>
                <p>Premium technology learning for students.</p>
                <ul class="contact-list">
                    <li><span>Email</span><a href="mailto:hello@futurescholars.in">hello@futurescholars.in</a></li>
                    <li><span>Phone</span><a href="tel:+919999999999">+91 99999 99999</a></li>
                    <li><span>Hours</span>Mon to Sat, 9:00 AM - 7:00 PM</li>
                </ul>
            </div>

            <form class="contact-form reveal" action="api/contact-form.php" method="post" novalidate>
                <?php if ($formSuccess) : ?>
                    <div class="form-alert success" role="status"><?php echo htmlspecialchars($formSuccess, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>

                <?php if ($formErrors) : ?>
                    <div class="form-alert error" role="alert">
                        <?php echo htmlspecialchars(reset($formErrors), ENT_QUOTES, 'UTF-8'); ?>
                    </div>
                <?php endif; ?>

                <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

                <label for="name">Name</label>
                <input id="name" name="name" type="text" autocomplete="name" required maxlength="80" value="<?php echo htmlspecialchars($formOld['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                <label for="email">Email</label>
                <input id="email" name="email" type="email" autocomplete="email" required maxlength="120" value="<?php echo htmlspecialchars($formOld['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                <label for="phone">Phone</label>
                <input id="phone" name="phone" type="tel" autocomplete="tel" required maxlength="20" value="<?php echo htmlspecialchars($formOld['phone'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">

                <?php if ($requestedCourseLabel) : ?>
                    <div class="form-alert success" role="status">Course selected: <?php echo htmlspecialchars($requestedCourseLabel, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>

                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required maxlength="1000"><?php echo htmlspecialchars($formOld['message'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>

                <button class="btn btn-primary" type="submit">Send enquiry</button>
            </form>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
