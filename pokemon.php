<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .card {
            width: 400px;
            height: 600px;
            border: solid 1px #ddd;
            position: relative;
            float: left;
            padding: 10px;
        }

        .card img,
        .card h5 {
            text-align: center;
        }

        .card h5, p{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
        }

        .card ul{
            font-size: 20px;
        }

        img {
            max-width: 300px;
            height: 300px;
            position: relative;
            top: 30%; 
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <title>Document</title>
</head>

<body>

    <?php foreach ($pokemons as $poke) : ?>
        <div class="card">

            <img src="<?= $poke['imagem'] ?>" alt="">
            <h5><?= $poke['nome'] ?></h5>
            <p>Altura: <?= $poke['altura'] ?> cm.</p>
            <p>Peso: <?= $poke['peso'] ?> grs.</p>
            <p>Habilidades: </p>

            <ul>
                <?php foreach ($poke['habilidades'] as $hab) : ?>
                    <li><?= $hab['ability']['name'] ?></li>
                <?php endforeach; ?>
            </ul>

        </div> <!-- /.card  -->
    <?php endforeach; ?>
</body>

</html>