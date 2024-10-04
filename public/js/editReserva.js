function changeStatusR(id){
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
                        url: url + "reservacontroller/changeStatusR",
                        data:{'id':id,}
                    }).done(function(answer){
                        if(answer == 1){
                            window.location = url + "reservacontroller/getReserva";
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
