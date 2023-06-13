function miFuncion() {
    fetch("asentamientos.json")
    .then (res => res.json())
    .then (data => {
        console.log(data);

        var codigo = document.getElementById("codigo").value;
        var localidades = data.localidades;
        var aux = "";
        var asentamientos=[];

        localidades.forEach(function(value) {
            if (codigo==value.provincia.id) {
                if (!(asentamientos.includes(value.departamento.nombre))) { //array.includes (Verifica si esta incluido en el array)
                    asentamientos.push(value.departamento.nombre)
                }
                document.getElementById("info").innerHTML = `
                <p>Provincia: ${value.provincia.nombre}
                <p>Localidades: ${asentamientos}
                <p>Cantidad de registros: ${localidades.length}`;
                aux = true;
                } else if (aux != true) {
                    document.getElementById("info").innerHTML = `
                    <p>No existe`
                }
        })
        console.log(asentamientos);
    })
}