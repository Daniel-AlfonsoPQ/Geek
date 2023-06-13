$(document).ready(function(){
  $("#calculate-button").click(function(){
      calcularCaloriasEIMC()
  });
  
});

function calcularCaloriasEIMC() {
  let edad = $('#edad').val();
  let genero = $('#genero').val();
  let peso = $('#peso').val();
  let altura = $('#altura').val();
  let nivelActividad = $('#activity-level').val();

  if (edad === '' || genero === '' || peso === '' || altura === '' || nivelActividad === '') {
    $('#result').text('Por favor, rellena todos los campos.');
    return;
  } else {
    // Realiza el cálculo de las calorías según la fórmula de Harris-Benedict
    var bmr;
    if (genero === 'male') {
      bmr = (10 * peso) + (6.25 * altura) - (5 * edad) - 161;
    } else {
      bmr = 5 + (10 * peso) + (6.25 * altura) - (5 * edad);
    }

    // Multiplica el resultado por el factor de actividad física correspondiente
    var factorActividad;
    if (nivelActividad === 'sedentary') {
      factorActividad = 1.2;
    } else if (nivelActividad === 'lightly-active') {
      factorActividad = 1.375;
    } else if (nivelActividad === 'moderately-active') {
      factorActividad = 1.55;
    } else if (nivelActividad === 'very-active') {
      factorActividad = 1.725;
    } else if (nivelActividad === 'extra-active') {
      factorActividad = 1.9;
    }

    var calories = Math.round(bmr * factorActividad);

    // IMC
    //
    var alturaElevada = Math

    var calories = Math.round(bmr * factorActividad);

    // IMC
    //
    var alturaElevada = Math.pow(altura / 100, 2);
    // var heightSquared = heightInMeters * heightInMeters;

    // Realiza el cálculo del IMC
    var bmi = peso / alturaElevada;

    // Determina la categoría de peso correspondiente al IMC calculado
    var category;
    if (bmi < 18.5) {
      category = 'bajo de peso';
    } else if (bmi < 25) {
      category = 'normal';
    } else if (bmi < 30) {
      category = 'de sobrepeso';
    } else {
      category = 'de obesidad';
    }

    $('#result').html('Tu ingesta calórica diaria recomendada es de ' + calories + ' calorías y tu IMC es de ' + bmi.toFixed(1) + ', lo que indica estás en un nivel ' + category + '.');
  }
}

$(document).ready(function() {
  
  $('.saveFood').click(function() {
    
    var nombre = $('#nombre').val();
    var calorias = $('#calorias').val();
    var proteinas = $('#proteinas').val();
    var grasas = $('#grasas').val();
    var carbohidratos = $('#carbohidratos').val();

    
    var data = {
      nombre: nombre,
      calorias: calorias,
      proteinas: proteinas,
      grasas: grasas,
      carbohidratos: carbohidratos
    };

  
  // Enviar los datos a Laravel mediante una petición AJAX
   $.ajax({
    url: 'http://localhost:8000/api/crearComida',
    method: 'POST',
    dataType: 'json',
    data: data
  });

  // vaciar los campos del formulario
  $('#nombre').val('');
  $('#calorias').val('');
  $('#proteinas').val('');
  $('#grasas').val('');
  $('#carbohidratos').val('');

  // Mostrar alerta de guardado exitoso
  alert('Comida guardada exitosamente');

});
});

// Obtener una referencia a la tabla
const table = document.querySelector('.table-comidas');

// Función para crear una fila en la tabla con los datos recibidos
function crearFila(alimento, calorias, proteinas, grasas, carbohidratos) {
  const fila = document.createElement('tr');
  
  const celdaAlimento = document.createElement('td');
  celdaAlimento.textContent = alimento;
  fila.appendChild(celdaAlimento);
  
  const celdaCalorias = document.createElement('td');
  celdaCalorias.textContent = calorias;
  fila.appendChild(celdaCalorias);
  
  const celdaProteinas = document.createElement('td');
  celdaProteinas.textContent = proteinas;
  fila.appendChild(celdaProteinas);
  
  const celdaGrasas = document.createElement('td');
  celdaGrasas.textContent = grasas;
  fila.appendChild(celdaGrasas);
  
  const celdaCarbohidratos = document.createElement('td');
  celdaCarbohidratos.textContent = carbohidratos;
  fila.appendChild(celdaCarbohidratos);
  
  table.appendChild(fila);
}

$(document).ready(function() {
  $.ajax({
    url: 'http://localhost:8000/api/comidas', 
    method: 'GET',
    dataType: 'json',
    success: function(data) {
      // Suponiendo que 'data' es un arreglo de objetos con la información de los alimentos
      
      // Obtener la referencia de la tabla
      var $tabla = $('.favFood');
      
      // Iterar sobre los datos y agregar filas a la tabla
      $.each(data, function(index, alimento) {
        var $fila = $('<tr>').appendTo($tabla);
        $('<td>').text(alimento.nombre).appendTo($fila);
        $('<td>').text(alimento.calorias).appendTo($fila);
        $('<td>').text(alimento.proteinas).appendTo($fila);
        $('<td>').text(alimento.grasas).appendTo($fila);
        $('<td>').text(alimento.carbohidratos).appendTo($fila);
      });
    },
    error: function() {
      alert('Ocurrió un error al obtener los datos de la API.');
    }
  });
});

