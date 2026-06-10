document
    .querySelectorAll('.faq-question')
    .forEach(item => {

        item.addEventListener('click', () => {

            const answer =
                item.nextElementSibling;

            document
                .querySelectorAll('.faq-answer')
                .forEach(a => {

                    if (a !== answer) {

                        a.style.display = 'none';
                    }

                });

            answer.style.display =
                answer.style.display === 'block'
                    ? 'none'
                    : 'block';

        });

    });