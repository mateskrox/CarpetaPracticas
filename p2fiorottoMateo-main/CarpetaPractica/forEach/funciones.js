function Funcion() {
    fetch(`datosCensales.json`)
    .then(res => res.json())
    .then(data => {
        console.log(data);
        var codigo = document.getElementById("codigo").value;

        var localidad = data["localidades-censales"];

        var aux = ""

        //console.log(localidad.length);

        localidad.forEach(function(value) {
            if (codigo == value.id) {
                document.getElementById("info").innerHTML = `
                <p>Departamento: ${value.departamento.nombre}
                <p>Municipio: ${value.municipio.nombre}
                <p>Cantidad de registros: ${localidad.length}`;

                aux = true;
                } else if (aux != true) {
                    document.getElementById("info").innerHTML = `
                    <p>No existe`
                }
        })
    })
}
