document
    .querySelectorAll('.gallery-filter button')
    .forEach(button => {

        button.addEventListener('click', () => {

            document
                .querySelectorAll('.gallery-filter button')
                .forEach(btn => btn.classList.remove('active'));

            button.classList.add('active');

        });

    });