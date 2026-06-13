// public/js/schedule.js

document.addEventListener('DOMContentLoaded', () => {

    const buttons =
        document.querySelectorAll('.view-switch button');

    buttons.forEach(button => {

        button.addEventListener('click', () => {

            buttons.forEach(btn =>
                btn.classList.remove('active')
            );

            button.classList.add('active');

        });

    });

});