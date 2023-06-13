<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (isset($_POST['submit'])) {
        
        $foodName = $_POST['comida'];
        $apiKey = '5a917e7b555099b46e5f8dcee7c796c0';
        $appId = 'b3e2fd98';
        $url = "https://api.edamam.com/api/food-database/v2/parser?ingr={$foodName}&app_id={$appId}&app_key={$apiKey}";


        $response = file_get_contents($url);
        $data = json_decode($response, true);

    foreach ($data['hints'] as $food) {
        $foodName = $food['food']['label'];
        $calories = round($food['food']['nutrients']['ENERC_KCAL']);
        $protein = round($food['food']['nutrients']['PROCNT']);
        $fat = round($food['food']['nutrients']['FAT']);
        $carbs = round($food['food']['nutrients']['CHOCDF']);
        echo '<tr><td class="fila" onclick="seleccionarFila(this)">' . $foodName . '</td><td>' . $calories . '</td><td>' . $protein . '</td><td>' . $fat . '</td><td>' . $carbs . '</td></tr>';
    }
    }
    ?>
</body>
<script src="../js/base de datos.js"></script>
</html>