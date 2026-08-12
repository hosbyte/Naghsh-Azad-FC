document.addEventListener("DOMContentLoaded", function () {


    /* ================= PHONE ================= */

    const phoneInputs = document.querySelectorAll(".phone-input");


    phoneInputs.forEach(input => {


        input.addEventListener("input", function () {


            this.value = this.value.replace(/[^0-9]/g, "");


            if (this.value.length > 11) {

                this.value = this.value.slice(0, 11);

            }


        });


    });



    /* ================= BIRTH DATE ================= */

    $(function () {

        $('#birth_date').persianDatepicker({

            format: 'YYYY/MM/DD',

            initialValue: false,

            autoClose: true,

            observer: true,

            responsive: true,

            initialValueType: 'persian'

        });

    });

    // favorite number
    document.addEventListener('DOMContentLoaded', function () {

        const favoriteNumber = document.getElementById('favorite_number');

        if (favoriteNumber) {

            favoriteNumber.addEventListener('input', function () {

                this.value = this.value
                    .replace(/\D/g, '')
                    .slice(0, 2);

            });

        }

    });
});