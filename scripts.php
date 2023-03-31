<script src="./public/bootstrap.bundle.min.js"></script>

<script>
function mostrarLabelAdicional() {
    var tipoPersona = document.getElementById("tipo_persona");
    var divAdicional = document.getElementById("div_adicional");
    var jornada = document.getElementById("jornada");
    if (tipoPersona.value == "aprendiz") {
    // mostrar opciones adicionales
    divAdicional.style.display = "block";
    jornada.options.add(new Option("Mañana", "mañana"));
    jornada.options.add(new Option("Tarde", "tarde"));
    jornada.options.add(new Option("Noche", "noche"));
    } else {
        // ocultar opciones adicionales
        divAdicional.style.display = "none";
        jornada.options.length = 1;
    }
}
function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var tipo_persona = document.getElementById("tipo_persona").value;
    if (nombre == "" || apellido == "" || documento == ""  || tipo_persona == "") {
        alert("Por favor, completa todos los campos.");
        return false;
    }
    return true;
}
</script>

</body>
</html>