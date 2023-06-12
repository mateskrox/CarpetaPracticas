function miFuncion() {
    fetch("asentamientos.json")
    .then (res => res.json())
    .then (data => {
        console.log(data);

        var codigo = document.getElementById("codigo").value;
        var localidades = data.localidades;
        var aux = ""

        localidades.forEach(function(value) {
            if (codigo==value.id) {
                console.log(value.id)
                document.getElementById("info").innerHTML = `
                <p>Provincia: ${value.provincia.nombre}
                <p>Localidad: ${value.localidad_censal.nombre}
                <p>Cantidad de registros: ${localidades.length}`;
                aux = true;
                } else if (aux != true) {
                    document.getElementById("info").innerHTML = `
                    <p>No existe`
                }
        })
    })
}