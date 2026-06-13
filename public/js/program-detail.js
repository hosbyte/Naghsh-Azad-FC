document.addEventListener('DOMContentLoaded', function () {

    const accordionItems =
        document.querySelectorAll('.accordion-item');

    accordionItems.forEach(item => {

        const header =
            item.querySelector('.accordion-header');

        header.addEventListener('click', function () {

            accordionItems.forEach(otherItem => {

                if (otherItem !== item) {

                    otherItem.classList.remove('active');

                }

            });

            item.classList.toggle('active');

        });

    });

});