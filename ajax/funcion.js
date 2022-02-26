//GUARDAMOS LA INSCRIPCION
$("#enviar").off("click");
$("#enviar").on("click", function(e) {
    $('enviar').attr("disabled", true);
    var codigo = $("#codigo").val();
    var nombres = $("#nombres").val();
    var apellidos = $("#apellidos").val();
    var DUI = $("#DUI").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var mail = $("#mail").val();
    
   
    parametros = {
        'codigo': codigo,
        'nombres': nombres,
        'apellidos': apellidos,
        'DUI': DUI,
        'direccio': direccion,
        'telefono': telefono,
        'mail': mail
    };
    $.ajax({
        type: "POST",
        url: "Recibe_clientes2.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg").html(datos);
            $('#enviar').attr("disabled", false);
            $('#nombre').val(''),
            $('#costo').val(''),
            $('#precio').val(''),
            $('stock').val(''),
            $('#stockminimo').val('')
        }
    });
    event.preventDefault();
});
