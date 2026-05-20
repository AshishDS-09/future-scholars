<?php
if (!function_exists('future_scholars_course_icon')) {
    function future_scholars_course_icon(string $icon): string
    {
        $icons = [
            'python' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 3h6a3 3 0 0 1 3 3v3H9a3 3 0 0 0-3 3v1H3V9a3 3 0 0 1 3-3h2V3Zm2 3h1V5h-1v1Zm6 15h-6a3 3 0 0 1-3-3v-3h8a3 3 0 0 0 3-3v-1h3v4a3 3 0 0 1-3 3h-2v3Zm-3-3h1v1h-1v-1Z"/></svg>',
            'web' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm0 4v8h16V9H4Zm4 2 3 2-3 2v-4Zm8 4h-4v-2h4v2Z"/></svg>',
            'ai' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2 9.8 7.8 4 10l5.8 2.2L12 18l2.2-5.8L20 10l-5.8-2.2L12 2Zm7 12-1.2 3.2L15 18.5l2.8 1.1L19 23l1.2-3.4 2.8-1.1-2.8-1.3L19 14ZM5 15l-.8 2.1L2 18l2.2.9L5 21l.8-2.1L8 18l-2.2-.9L5 15Z"/></svg>',
            'app' => '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8 2h8a3 3 0 0 1 3 3v14a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3Zm0 4v11h8V6H8Zm3 13v1h2v-1h-2Z"/></svg>',
        ];

        return $icons[$icon] ?? $icons['web'];
    }
}

$courseId = $course['id'] ?? strtolower(str_replace([' ', '(', ')'], ['-', '', ''], $course['title'] ?? 'course'));
?>
<article id="<?php echo htmlspecialchars($courseId, ENT_QUOTES, 'UTF-8'); ?>" class="course-card reveal">
    <div class="course-icon"><?php echo future_scholars_course_icon((string) ($course['icon'] ?? 'web')); ?></div>
    <h3><?php echo htmlspecialchars($course['title'] ?? '', ENT_QUOTES, 'UTF-8'); ?></h3>
    <p><?php echo htmlspecialchars($course['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></p>
    <a class="card-link" href="<?php echo htmlspecialchars($course['url'] ?? 'contact', ENT_QUOTES, 'UTF-8'); ?>">View course</a>
</article>
