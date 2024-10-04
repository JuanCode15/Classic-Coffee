//crear el método para dato del usuario
function dataUser(id){
    //alert(id);
    $.ajax({
        url: url + "usuarioController/dataUser",
        type: "post",
        dataType: "json",
        data:{'id':id}
    }).done(function(answer){
        $.each(answer, function(index, value){
            $('#selDocType').val(value.idTipoDocumento);
            $('#txtIdUser').val(value.idUsuario);
            $('#txtDocument').val(value.Documento);
            $('#txtNames').val(value.Nombres);
            $('#txtLastName').val(value.Apellidos);
            $('#txtPhoneNumber').val(value.Telefono);
            $('#txtAddress').val(value.Direccion);
            $('#txtEmail').val(value.Email);
            $('#txtUser').val(value.Usuario);
            $('#txtPassword').val(value.Clave);
        })
    }).fail(function(error){
        console.log(error)
    })
}

//método para cambiar el estado
function changeStatus(id){
    //alert(id);
    Swal.fire({
        title:'Would you like to change status?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it',
    }).then((result)=>{
        if(result.isConfirmed){
            Swal.fire({
                position: "",
                icon: "success",
                title: "Status changed",
                confirmButtonText: "OK",
                timer: 1500
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        type: "post",
                        url: url + "usuarioController/changeStatus",
                        data:{'id':id,}
                    }).done(function(answer){
                        if(answer == 1){
                            window.location = url + "usuarioController/getUsers";
                            window.reload();
                        }else{
                            Swal.fire('Wrong to change Status', '', 'error');
                        }
                    }).fail(function(error){
                        console.log(error);
                    })
                }
            })
        }
    })
}

//método para eliminar
function deleteUser(id){
    //alert(id);
    Swal.fire({
        title:'Would you like to delete this user?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete it',
    }).then((result)=>{
        if(result.isConfirmed){
            Swal.fire({
                position: "",
                icon: "success",
                title: "User Deleted",
                confirmButtonText: "OK",
                timer: 1500
            }).then((result)=>{
                if(result.isConfirmed){
                    $.ajax({
                        type: "post",
                        url: url + "usuarioController/deleteUser",
                        data:{'id':id,}
                    }).done(function(answer){
                        if(answer == 1){
                            window.location = url + "usuarioController/getUsers";
                            window.reload();
                        }else{
                            Swal.fire('Wrong to Delete User', '', 'error');
                        }
                    }).fail(function(error){
                        console.log(error);
                    })
                }
            })
        }
    })

}
