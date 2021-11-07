function openItemTable(id) {
    closeItemTables();
    let elem = $('#' + id);
    if (elem.css('display') == 'block') {
        elem.slideUp();
    } else {
        elem.slideDown();
    }
}

function closeItemTables() {
    $(".fbg_itemtabhidden").slideUp();
}