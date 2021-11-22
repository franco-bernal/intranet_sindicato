function deleteUser(id, deleteUser, route) {
    var opcion = confirm("Eliminar?");
    if (opcion) {
        $.ajax({
            type: 'post',
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: id,
                id_delete: deleteUser,
            },
            success: function(data) {
                console.log(data);
                if (data > 0) {
                    $("#" + id).slideUp().ready(function() {
                        $(this).remove();
                    });
                } else {
                    alert('error al actualizar');
                }

            },
            error: function(error) {}
        }).fail(function(jqXHR, textStatus, error) {

        });
    }
}

function createUser(route) {
    let name = $("#create-name").val();
    let email = $("#create-email").val();
    let password = $("#create-password").val();
    let re_pass = $("#create-re-password").val();
    let tipo_usuario = $("#create-tipousuario").val();
    var opcion = confirm("Confirma los datos del usuario");

    if (opcion) {
        $.ajax({
            type: 'post',
            url: route,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                name: name,
                email: email,
                password: password,
                re_pass: re_pass,
                tipo_usuario: tipo_usuario,
            },
            success: function(data) {
                console.log(data);
                if (data != 0) {
                    // $("#" + id).slideUp().ready(function() {
                    //     $(this).remove();
                    // });

                    let fbg_itemtab = $("<div>", {
                        'class': 'fbg_item_tab',
                        'id': 'itemList' + data.id,
                    })
                    let fbg_itemtabdisplay = $("<div>", {
                        'class': 'fbg_itemtabdisplay',
                    })
                    let spanId = $("<span>", {
                        'class': "spanItem",
                        'html': data.id,
                    })
                    let spanName = $("<span>", {
                        'class': "spanItem",
                        'html': data.name,
                    })
                    let spanVer = $("<span>", {
                        'class': "spanItem",
                        'html': `<a onclick="openItemTable('userTable${data.id}')">ver completo</a>`,
                    })
                    let spanDelete = $("<span>", {
                        'class': "spanItem",
                        'html': `<a onclick="deleteUser('itemList${data.id}','${data.id}','${routeDeleteUser}')">Eliminar</a>`,
                    })

                    let fbg_itemtabhidden = $("<div>", {
                        'class': 'fbg_itemtabhidden',
                        'id': 'userTable' + data.id
                    })

                    let spanSubEmail = $("<span>", {
                        'html': data.email
                    })


                    fbg_itemtabdisplay.append(spanId);
                    fbg_itemtabdisplay.append(spanName);
                    fbg_itemtabdisplay.append(spanVer);
                    fbg_itemtabdisplay.append(spanDelete);
                    fbg_itemtab.append(fbg_itemtabdisplay);

                    fbg_itemtabhidden.append(spanSubEmail);
                    fbg_itemtab.append(fbg_itemtabhidden);

                    $('#fbg_res_tab').append(fbg_itemtab);

                    alert("creado satisfactoriamente");
                } else {
                    alert('error al crear');
                }

            },
            error: function(error) {}
        }).fail(function(jqXHR, textStatus, error) {
            alert('error fatal');
        });
    }
}

function checkPrivate(id, idCheck) {
    let valueActual = $("#" + idCheck).val();
    $.ajax({
        type: 'post',
        url: "{{ route('private.blog') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id,
            private: valueActual,
        },
        success: function(data) {
            console.log(data);
            if (data != -1) {
                if (valueActual != 1) {
                    $("#" + idCheck).removeAttr('checked');
                } else {
                    $("#" + idCheck).attr('checked', 'checked');
                }
                $("#" + idCheck).val(data);
            } else {
                alert('error al actualizar');
            }

        },
        error: function(error) {}
    }).fail(function(jqXHR, textStatus, error) {

    });
}