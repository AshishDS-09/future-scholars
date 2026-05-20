# Future Scholars

Production-ready PHP 8+ website for an EdTech platform serving students.

## Stack

- PHP 8+
- HTML5
- CSS3
- Vanilla JavaScript
- Apache `.htaccess`

## Pages

- `index.php`
- `about.php`
- `courses.php`
- `contact.php`

## Contact Form

The form posts to `api/contact-form.php` and includes:

- POST-only handling
- CSRF token validation
- Server-side validation
- Sanitization
- PHP `mail()` delivery
- Session-based success and error messages

Update the recipient email in `api/contact-form.php`:

```php
$to = 'hello@futurescholars.in';
```

## Hosting

Upload the `future-scholars` folder to any PHP 8+ Apache shared hosting server. Clean URLs, HTTPS redirect, compression, caching, and security headers are handled by `.htaccess`.
