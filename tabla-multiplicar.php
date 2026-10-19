<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
    <style>
        body {
            margin: 0;
            background-color: blue;
            color: white;
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
        }

        h1 {
            text-align: center;
            margin: 0 0 30px;
            font-size: 48px;
        }

        .contenedor {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 0 50px;
        }

        .tabla {
            background-color: black;
            border: 5px solid white;
            padding: 5px 20px;
            text-align: center;
            line-height: 1.35;
        }

        .tabla p {
            margin: 0;
        }
    </style>
</head>
<body>
    <h1>Tabla de multiplicar</h1>

    <div class="contenedor">
        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>1 x <?= $i ?> = <?= 1 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>2 x <?= $i ?> = <?= 2 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>3 x <?= $i ?> = <?= 3 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>4 x <?= $i ?> = <?= 4 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>5 x <?= $i ?> = <?= 5 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>6 x <?= $i ?> = <?= 6 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>7 x <?= $i ?> = <?= 7 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>8 x <?= $i ?> = <?= 8 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>9 x <?= $i ?> = <?= 9 * $i ?></p>
            <?php } ?>
        </div>

        <div class="tabla">
            <?php for ($i = 1; $i <= 10; $i++){ ?>
                <p>10 x <?= $i ?> = <?= 10 * $i ?></p>
            <?php } ?>
        </div>
    </div>
</body>
</html>