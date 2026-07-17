document.addEventListener("DOMContentLoaded", function () {

    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach(item => {

        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");

        // اگر آیتم به صورت پیش فرض active بود
        if (item.classList.contains("active")) {
            answer.style.maxHeight = answer.scrollHeight + "px";
        }

        question.addEventListener("click", function () {

            // اگر همین آیتم باز است، آن را نبند
            if (item.classList.contains("active")) {
                return;
            }

            // بستن سایر آیتم‌ها
            faqItems.forEach(faq => {

                faq.classList.remove("active");

                const body = faq.querySelector(".faq-answer");
                body.style.maxHeight = null;

            });

            // باز کردن آیتم انتخاب شده
            item.classList.add("active");
            answer.style.maxHeight = answer.scrollHeight + "px";

        });

    });

});