//FORMA 1

function miFuncion() {
    var code = document.getElementById("codigo").value;
    aux = "";
    asentamientos = [];

    fetch("asentamientos.json")
    .then(res=>res.json())
    .then(data => {
        localidades = data.localidades;

        localidades.forEach(function(value) {
            if (code==value.provincia.id) {
                if(!(asentamientos.includes(value.departamento.nombre))) {
                    asentamientos.push(value.departamento.nombre)
                }
                aux=true;
                document.getElementById("informacion").innerHTML = `
                Cant REG: ${localidades.length} <br>
                <br>
                Nombre provincia: ${value.provincia.nombre} <br>
                <br>
                Municipios dentro de la provincia: ${asentamientos} <br>
                `
                console.log(value.provincia.nombre)
            } else if (aux != true) {
                document.getElementById("informacion").innerHTML = `NO EXISTE`
            }
        })
    })
}

//FORMA 2

function miFuncion2() {
    var code2 = document.getElementById("codigo2").value;
    aux2 = "";

    fetch("asentamientos.json")
    .then(res=>res.json())
    .then(data => {
        localidades = data.localidades;

        localidades.forEach(function(value) {
            if (code2==value.id) {
                aux2=true;
                document.getElementById("informacion2").innerHTML = `
                Cant REG: ${localidades.length} <br>
                <br>
                Nombre Loc Censal: ${value.localidad_censal.nombre} <br>
                <br>
                Nombre municipio: ${value.municipio.nombre} <br>
                `
            } else if (aux2 != true) {
                document.getElementById("informacion2").innerHTML = `NO EXISTE`
            }
        })
    })
}