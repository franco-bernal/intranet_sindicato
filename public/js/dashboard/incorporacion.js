function changeStatusAjax(elemId, id, status, status_section, route, rut) {
    $.ajax({
        type: 'post',
        url: route,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id,
            status: status,
        },
        success: function(data) {
            console.log(data);
            if (data != null) {
                changeStatusSection(elemId, id, data, rut);
            } else {
                alert("Error al actualizar.");
            }
        },
        error: function(error) {}
    }).fail(function(jqXHR, textStatus, error) {

    });
}

function changeStatusSection(elemId, id, status, rut) {
    let elem = $("." + status);

    $(elemId).addClass("deleteElement");
    $(elemId).slideUp("slow").ready(function() {
        setInterval(() => {
            $(".deleteElement").remove();
        }, 3000);
    });
    let divj = $('<div>', {
        'html': $(elemId).html(),
        'class': 'fbg_item_tab',
        'id': "item" + rut + id
    });
    elem.append(divj).slideDown("slow");
}