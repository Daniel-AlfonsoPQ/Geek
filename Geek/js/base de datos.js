function seleccionarFila(fila) {
    var celdas = fila.parentNode.getElementsByTagName("td");
    var nombre = celdas[0].innerText;
    var calorias = celdas[1].innerText;
    var proteinas = celdas[2].innerText;
    var carbohidratos = celdas[3].innerText;
    var grasas = celdas[4].innerText;
  
    document.getElementById("nombre").value = nombre;
    document.getElementById("calorias").value = calorias;
    document.getElementById("proteinas").value = proteinas;
    document.getElementById("carbohidratos").value = carbohidratos;
    document.getElementById("grasas").value = grasas;
  }
  