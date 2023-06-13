<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/bootstrap.css">
    <link rel="stylesheet" href="../estilos/style-nutricion.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace&display=swap" rel="stylesheet">
    <title>Geek</title>
    <link rel="icon" href="..\img\pesa.ico" type="image/x-icon">
</head>
<body>

  <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid navegacion">
                    <a class="navbar-brand" href="#">
                        <img src="../img/logo.png" alt="Logo" width="100" class="d-inline-block align-text-top img-fluid">
                    </a>
                    <h1>Geek</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              
              <div class="collapse navbar-collapse d-lg-flex justify-content-end text-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="./nutrición.php">Volver</a>
                  </div>
              </div>
            </div>
          </nav>       
    </header>
    <div class="container">
        <div class= "logo">Aquí se encuentra tu comida <b>Favorita</b><b>&#33;</b><b>&#33;</b><b>&#33;</b></div>  
    </div>


    <div class="container text-center table-comidas">
      <table class="favFood">
          <tr>
            <th>Alimento</th>
            <th>Calorías</th>
            <th>Proteínas (g)</th>
            <th>Grasas (g)</th>
            <th>Carbohidratos (g)</th>
          </tr> 
          
        </table>
    </div>

      <div class="container d-flex justify-content-center">
        <img src="../img/logo.png" alt="Logo" width="180" class="img-fluid logoN">
      </div>
      <script src="../js/jquery-3.6.4.min.js"></script>
      <script src="../js/miScript.js"></script>
</body>
<script src="../js/bootstrap.bundle.js"></script>
</html>