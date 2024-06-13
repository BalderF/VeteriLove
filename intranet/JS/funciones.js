function registrarUser(e){
    e.preventDefault();
    const nombre = document.getElementById("nombre");
    const apellido=document.getElementById("apellido");
    const contrasena=document.getElementById("contrasena");
    const telefono=document.getElementById("telefono");
    const direccion=document.getElementById("direccion");

    if(nombre.value==""|| apellido.value==""|| contrasena.value==""|| telefono.value==""|| direccion.value==""){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'Registrado Satisfactoriamente',
            showConfirmButton: false,
            timer: 1500
          })
    }else{

    }
}