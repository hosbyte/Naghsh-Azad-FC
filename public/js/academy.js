window.addEventListener('scroll', function () {

    const navbar =
        document.querySelector('.academy-navbar');

    if (window.scrollY > 50) {

        navbar.classList.add('scrolled');

    } else {

        navbar.classList.remove('scrolled');
    }
});

// !88888888888888888888888888888888888888888888888888888888888888888888

// باز و بسته کردن منوی «جدول» و زیرمنوهایش با کلیک/لمس
// (روی دسکتاپ همچنان با hover هم باز می‌شود؛ این اسکریپت فقط برای موبایل/تبلت لازم است)

document.addEventListener('DOMContentLoaded', function () {

    var tableDropdown = document.querySelector('.table-dropdown');
    if (!tableDropdown) return;

    var tableToggle = tableDropdown.querySelector('.table-toggle');
    var submenuItems = tableDropdown.querySelectorAll('.table-menu-item.has-submenu');

    function isMobile() {
        return window.matchMedia('(max-width: 991px)').matches;
    }

    // باز/بسته کردن سطح اول (جدول)
    tableToggle.addEventListener('click', function (e) {
        if (!isMobile()) return; // در دسکتاپ hover کافیست

        e.preventDefault();

        var willOpen = !tableDropdown.classList.contains('open');
        tableDropdown.classList.toggle('open', willOpen);
        tableToggle.setAttribute('aria-expanded', willOpen);

        // بستن زیرمنوهای باز مانده از قبل
        if (!willOpen) {
            submenuItems.forEach(function (item) {
                item.classList.remove('open');
                item.querySelector('.table-menu-link').setAttribute('aria-expanded', false);
            });
        }
    });

    // باز/بسته کردن سطح دوم (لیگ برتر / لیگ دسته یک)
    submenuItems.forEach(function (item) {
        var link = item.querySelector('.table-menu-link');

        link.addEventListener('click', function (e) {
            if (!isMobile()) return;

            e.preventDefault();

            var willOpen = !item.classList.contains('open');

            // بستن بقیه زیرمنوها قبل از باز کردن این یکی
            submenuItems.forEach(function (other) {
                if (other !== item) {
                    other.classList.remove('open');
                    other.querySelector('.table-menu-link').setAttribute('aria-expanded', false);
                }
            });

            item.classList.toggle('open', willOpen);
            link.setAttribute('aria-expanded', willOpen);
        });
    });

    // بستن منو با کلیک بیرون از آن
    document.addEventListener('click', function (e) {
        if (!isMobile()) return;
        if (tableDropdown.contains(e.target)) return;

        tableDropdown.classList.remove('open');
        tableToggle.setAttribute('aria-expanded', false);

        submenuItems.forEach(function (item) {
            item.classList.remove('open');
            item.querySelector('.table-menu-link').setAttribute('aria-expanded', false);
        });
    });
});
