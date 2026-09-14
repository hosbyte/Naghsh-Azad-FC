document.addEventListener('DOMContentLoaded', function () {

    /*
    |--------------------------------------------------------------------------
    | انتخاب لیگ برتر / لیگ دسته یک
    |--------------------------------------------------------------------------
    */

    const leagueTabs = document.querySelectorAll('[data-league-tab]');
    const leagueContents = document.querySelectorAll('[data-league-content]');

    leagueTabs.forEach(function (tab) {

        tab.addEventListener('click', function () {

            const targetLeague = tab.dataset.leagueTab;

            leagueTabs.forEach(function (item) {
                item.classList.remove('active');
            });

            leagueContents.forEach(function (content) {
                content.classList.remove('active');
            });

            tab.classList.add('active');

            const targetContent = document.querySelector(
                `[data-league-content="${targetLeague}"]`
            );

            if (targetContent) {
                targetContent.classList.add('active');
            }

        });

    });


    /*
    |--------------------------------------------------------------------------
    | انتخاب جدول داخل هر لیگ
    |--------------------------------------------------------------------------
    */

    const tableSelectors = document.querySelectorAll('.league-select');

    tableSelectors.forEach(function (select) {

        select.addEventListener('change', function () {

            const targetTable = select.value;

            const parentContent = select.closest('.league-tab-content');

            if (!parentContent) {
                return;
            }

            const tables = parentContent.querySelectorAll('.league-table-item');

            tables.forEach(function (table) {
                table.classList.remove('active');
            });

            const selectedTable = parentContent.querySelector(
                `[data-table="${targetTable}"]`
            );

            if (selectedTable) {
                selectedTable.classList.add('active');
            }

        });

    });

});