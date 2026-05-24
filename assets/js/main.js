(function () {
    'use strict';

    document.documentElement.classList.add('js-ready');

    var header = document.querySelector('[data-header]');
    var toggle = document.querySelector('[data-nav-toggle]');
    var menu = document.querySelector('[data-nav-menu]');
    var themeToggle = document.querySelector('[data-theme-toggle]');
    var themeColor = document.querySelector('[data-theme-color]');
    var systemTheme = window.matchMedia ? window.matchMedia('(prefers-color-scheme: dark)') : null;

    var getStoredTheme = function () {
        try {
            return localStorage.getItem('futureScholarsTheme');
        } catch (error) {
            return null;
        }
    };

    var storeTheme = function (theme) {
        try {
            localStorage.setItem('futureScholarsTheme', theme);
        } catch (error) {
            return;
        }
    };

    var applyTheme = function (theme) {
        var isDark = theme === 'dark';
        document.documentElement.setAttribute('data-theme', theme);

        if (themeColor) {
            themeColor.setAttribute('content', isDark ? '#071323' : '#123f7a');
        }

        if (themeToggle) {
            themeToggle.setAttribute('aria-pressed', String(isDark));
            themeToggle.setAttribute('aria-label', isDark ? 'Switch to light mode' : 'Switch to night mode');
            themeToggle.setAttribute('title', isDark ? 'Switch to light mode' : 'Switch to night mode');
        }
    };

    applyTheme(getStoredTheme() || (systemTheme && systemTheme.matches ? 'dark' : 'light'));

    if (themeToggle) {
        themeToggle.addEventListener('click', function () {
            var nextTheme = document.documentElement.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
            applyTheme(nextTheme);
            storeTheme(nextTheme);
        });
    }

    if (systemTheme) {
        var onThemePreferenceChange = function (event) {
            if (!getStoredTheme()) {
                applyTheme(event.matches ? 'dark' : 'light');
            }
        };

        if (typeof systemTheme.addEventListener === 'function') {
            systemTheme.addEventListener('change', onThemePreferenceChange);
        } else if (typeof systemTheme.addListener === 'function') {
            systemTheme.addListener(onThemePreferenceChange);
        }
    }

    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            var isOpen = menu.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', String(isOpen));
            document.body.classList.toggle('nav-open', isOpen);
        });

        menu.addEventListener('click', function (event) {
            if (event.target.tagName === 'A') {
                menu.classList.remove('is-open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.classList.remove('nav-open');
            }
        });
    }

    var onScroll = function () {
        if (header) {
            header.classList.toggle('is-scrolled', window.scrollY > 8);
        }
    };
    onScroll();
    window.addEventListener('scroll', onScroll, { passive: true });

    var revealItems = document.querySelectorAll('.reveal');
    revealItems.forEach(function (item, index) {
        item.style.setProperty('--reveal-delay', Math.min(index * 45, 240) + 'ms');
    });

    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        revealItems.forEach(function (item) {
            observer.observe(item);
        });
    } else {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
    }

    var samePageLinks = document.querySelectorAll('a[href^="#"]');
    samePageLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            var href = link.getAttribute('href');
            if (!href || href === '#') {
                return;
            }

            var target = document.querySelector(href);
            if (!target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });

    var localPageLinks = document.querySelectorAll('a[href]');
    localPageLinks.forEach(function (link) {
        link.addEventListener('click', function (event) {
            var href = link.getAttribute('href') || '';
            var isModifiedClick = event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || link.target === '_blank';
            var isLocalPage = href.indexOf('http') !== 0 && href.indexOf('mailto:') !== 0 && href.indexOf('tel:') !== 0 && href.charAt(0) !== '#';

            if (isModifiedClick || !isLocalPage || window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                return;
            }

            event.preventDefault();
            document.body.classList.add('page-leaving');
            window.setTimeout(function () {
                window.location.href = href;
            }, 180);
        });
    });
})();
