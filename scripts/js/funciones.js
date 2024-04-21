function msjerroruser(){
    alert ("Error de Usuario");
}

function msjerrorpass(){
    alert ("Error de Contraseña");
}

function msjguardar(){
    alert ("Datos Guardados");
}

function cargarDiv (div, url) {
    $(div).load(url);
}

function salir(){
    Swal.fire({
        title: "Quieres salir del sistema",
        text: "Seleccciona si para salir",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si, Salir",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if(result.isConfirmed){
            window.location = "logout.php"
        }
    })
}

function registrarCliente() {
    var nombre=$('#nombre').val();
    var direccion=$('#direccion').val();
    var telefono=$('#telefono').val();
    var correo=$('#correo').val();

    $.post("registrarcliente.php", {"nombre": nombre, "direccion": direccion, "telefono": telefono, "correo": correo}, function(respuesta){
        alert(respuesta);
        $("txtnombre").val("");
        $("txtdireccion").val("");
        $("txttelefono").val("");
        $("txtcorreo").val("");
        $("txtcontrasena").val("");
    });
}

function registrarVehiculo() {
    var matricula=$('#matricula').val();
    var modelo=$('#modelo').val();
    var color=$('#color').val();
    var puertas=$('#puertas').val();
    var tipo=$('#tipo').val();
    var Id_cliente=$('#Id_cliente').val();

    $.post("registrarvehiculo.php", {"matricula": matricula, "modelo": modelo, "color": color, "puertas": puertas, "tipo": tipo, "Id_cliente": Id_cliente}, function(respuesta){
        alert(respuesta);
        $("txtmatricula").val("");
        $("txtmodelo").val("");
        $("txtcolor").val("");
        $("txtpuertas").val("");
        $("txttipo").val("");
        $("txtId_cliente").val("");
    });
}

function registrarEncargado() {
    var nombre=$('#nombre').val()
    var direccion=$('#direccion').val()
    var telefono=$('#telefono').val()
    var correo=$('#correo').val()
    var usuario=$('#usuario').val()
    var contrasena=$('#contrasena').val()

    $.post("registrarencargado.php", {"nombre": nombre, "direccion": direccion, "telefono": telefono, "correo": correo, "usuario": usuario, "contrasena": contrasena}, function(respuesta){
        alert(respuesta);
        $("txtnombre").val("");
        $("txtdireccion").val("");
        $("txttelefono").val("");
        $("txtcorreo").val("");
        $("txtusuario").val("");
        $("txtcontrasena").val("");
    });
}


function registrarCajon() {
    var numero=$('#numero').val();

    $.post("registrarcajon.php", {"numero": numero}, function(respuesta){
        alert(respuesta);
        $("txtnumero").val("");
    });
}

function registrarTarifa() {
    var tarifa=$('#tarifa').val();
    var monto=$('#monto').val();

    $.post("registrartarifa.php", {"tarifa": tarifa, "monto": monto}, function(respuesta){
        alert(respuesta);
        $("txttarifa").val("");
        $("txtmonto").val("");
    });
}

function editarCliente(Id_cliente){
    alert(Id_cliente);
    $.post("actualizarcliente.php", { "Id_cliente": Id_cliente }, function(respuesta){
        contenido.innerHTML = respuesta
    });
}

function eliminarCajon(Id_cajon) {
    $.post("eliminarcajon.php", { "Id_cajon": Id_cajon }, function(result) {
        alert(result);
    });
}

function eliminarCliente(Id_cliente) {
    $.post("eliminarcliente.php", { "Id_cliente": Id_cliente }, function(result) {
        alert(result);
    });
}

function eliminarEncargado(Id_empleado) {
    $.post("eliminarencargado.php", { "Id_empleado": Id_empleado }, function(result) {
        alert(result);
    });
}

function eliminarVehiculo(Id_vehiculo) {
    $.post("eliminarVehiculo.php", { "Id_vehiculo": Id_vehiculo }, function(result) {
        alert(result);
    });
}

function eliminarTarifa(Id_tarifa) {
    $.post("eliminartarifa.php", { "Id_tarifa": Id_tarifa }, function(result) {
        alert(result);
    });
}

function editarCliente(Id_cliente){
    $.post("actualizarcliente.php", { "Id_cliente": Id_cliente }, function(respuesta){
        contenido.innerHTML = respuesta
    });
}

function actualizarCliente(Id_cliente){
    var nombre=$("#nombre").val()
    var direccion=$("#direccion").val()
    var telefono=$("#telefono").val()    
    var correo=$("#correo").val()

    $.post("updatecliente.php",{"Id_cliente": Id_cliente, "nombre": nombre, "direccion":direccion, "telefono":telefono, "correo":correo }, function(result){
        msjguardar(result)
        cargarDiv($("#result"), '../../consulta-datos/consultarcliente.php')
    })
}

function editarVehiculo(Id_vehiculo){
    $.post("actualizarvehiculo.php", { "Id_vehiculo": Id_vehiculo }, function(respuesta){
        contenido.innerHTML = respuesta
    });
}

function actualizarVehiculo(Id_vehiculo){
    var matricula=$('#matricula').val();
    var modelo=$('#modelo').val();
    var color=$('#color').val();
    var puertas=$('#puertas').val();
    var tipo=$('#tipo').val();
    var Id_cliente=$('#Id_cliente').val();

    $.post("updatevehiculo.php", {"Id_vehiculo":Id_vehiculo, "matricula": matricula, "modelo": modelo, "color": color, "puertas": puertas, "tipo": tipo, "Id_cliente": Id_cliente}, function(result){
        msjguardar(result)
        cargarDiv($("#respuesta"), 'consultarvehiculo.php')
    })
}

function editarTarifa(Id_tarifa){
    $.post("actualizartarifa.php", { "Id_tarifa": Id_tarifa }, function(respuesta){
        contenido.innerHTML = respuesta
    });
}

function actualizarTarifa(Id_tarifa){
    var tarifa=$('#tarifa').val();
    var monto=$('#monto').val();

    $.post("updatetarifa.php", {"Id_tarifa":Id_tarifa, "tarifa": tarifa, "monto": monto}, function(result){
        msjguardar(result)
        cargarDiv($("#respuesta"), 'consultartarifa.php')
    })
}

function editarEncargado(Id_empleado){
    $.post("actualizarencargado.php", { "Id_empleado": Id_empleado }, function(respuesta){
        contenido.innerHTML = respuesta
    });
}

function actualizarEncargado(Id_empleado){
    var nombre=$('#nombre').val()
    var direccion=$('#direccion').val()
    var telefono=$('#telefono').val()
    var correo=$('#correo').val()
    var usuario=$('#usuario').val()
    var contrasena=$('#contrasena').val()

    $.post("updateencargado.php", {"Id_empleado": Id_empleado, "nombre": nombre, "direccion": direccion, "telefono": telefono, "correo": correo, "usuario": usuario, "contrasena": contrasena}, function(result){
        msjguardar(result)
        cargarDiv($("#respuesta"), 'consultarencargado.php')
    })
}

function registrarRegistro() {
    var Id_vehiculo=$('#Id_vehiculo').val();
    var Id_cajon=$('#Id_cajon').val();
    var Id_tarifa=$('#Id_tarifa').val();

    $.post("registrarregistro.php", {"Id_vehiculo": Id_vehiculo, "Id_cajon": Id_cajon, "Id_tarifa": Id_tarifa}, function(respuesta){
        alert(respuesta);
        $("#Id_vehiculo").val("");
        $("#Id_cajon").val("");
        $("#Id_tarifa").val("");
    });
}


function abrirModal(Id_cajon) {
    $("#modalPromociones").modal("show")
    $("#Id_cajon").val(Id_cajon)
}

function cerrarModal(){
    $("#modalPromociones").modal('hide')
}

function cerrarCajon(Id_cajon){
    $.post("updatefecha.php", {"Id_cajon" : Id_cajon}, function(result) {
        alert (result);
       // cargarDiv($("#contenido"), 'inicio.php')
    });
}

function actualizarCajon(Id_cajon){
    $.post("updatecajon.php"), {
        "Id_cajon": Id_cajon
    }, function(result) {
        msjguardar(result)
        cargarDiv($("#contenido"), 'inicio.php')
    }
}

// Examen
function registrarServo() {
    var descripcion=$('#descripcion').val();
    var grados=$('#grados').val();
    var estatus=$('#estatus').val();

    $.post("registrarservo.php", { "descripcion": descripcion, "grados": grados, "estatus": estatus }, function(respuesta){
        alert(respuesta);
        $("txtdescripcion").val("");
        $("txtgrados").val("");
        $("txtestatus").val("");
    });
}

function editarServo(Id_servo){
    $.post("actualizarservo.php", { "Id_servo": Id_servo }, function(respuesta){
        contenido.innerHTML = respuesta
    });
}

function actualizarServo(Id_servo){
    var descripcion=$('#descripcion').val();
    var grados=$('#grados').val();
    var estatus=$('#estatus').val();

    $.post("updateservo.php", { "Id_servo": Id_servo, "descripcion": descripcion, "grados": grados, "estatus": estatus }, function(respuesta) {
        msjguardar(result)
        cargarDiv($("#respuesta"), 'consultarservo.php')
    })
}

function eliminarServo(Id_servo) {
    $.post("eliminarservo.php", { "Id_servo": Id_servo }, function(result) {
        alert(result);
    });
}

