<?php
declare(strict_types=1);

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../contact.php');
    exit;
}

function clean_input(string $value): string
{
    return trim(strip_tags($value));
}

$token = $_POST['csrf_token'] ?? '';
if (!is_string($token) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $token)) {
    $_SESSION['form_errors'] = ['csrf' => 'Your session expired. Please refresh the page and try again.'];
    header('Location: ../contact.php');
    exit;
}

$name = clean_input((string) ($_POST['name'] ?? ''));
$email = filter_var(trim((string) ($_POST['email'] ?? '')), FILTER_SANITIZE_EMAIL);
$phone = clean_input((string) ($_POST['phone'] ?? ''));
$message = clean_input((string) ($_POST['message'] ?? ''));

$_SESSION['form_old'] = [
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'message' => $message,
];

$errors = [];

if ($name === '' || mb_strlen($name) < 2 || mb_strlen($name) > 80) {
    $errors['name'] = 'Please enter a valid name.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || mb_strlen($email) > 120) {
    $errors['email'] = 'Please enter a valid email address.';
}

if (!preg_match('/^[0-9+\-\s()]{7,20}$/', $phone)) {
    $errors['phone'] = 'Please enter a valid phone number.';
}

if ($message === '' || mb_strlen($message) < 10 || mb_strlen($message) > 1000) {
    $errors['message'] = 'Please enter a message between 10 and 1000 characters.';
}

if ($errors) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../contact.php');
    exit;
}

$to = 'hello@futurescholars.in';
$subject = 'New Future Scholars enquiry';
$body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\n\nMessage:\n{$message}\n";
$headers = [
    'From: Future Scholars Website <no-reply@futurescholars.in>',
    'Reply-To: ' . $email,
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion(),
];

$sent = mail($to, $subject, $body, implode("\r\n", $headers));

unset($_SESSION['form_old']);
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
$_SESSION['form_success'] = $sent
    ? 'Thank you. Your enquiry has been sent successfully.'
    : 'Thank you. Your enquiry has been received, but email delivery may need hosting mail setup.';

header('Location: ../contact.php');
exit;
