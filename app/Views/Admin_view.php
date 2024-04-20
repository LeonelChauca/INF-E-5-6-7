
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1"><?php if ($usuarioValidado): ?>
        <p>Bienvenido , <?= $usuarioValidado['nombre'] ?>. Has iniciado sesión correctamente.</p>
    <?php endif; ?></span>
            <span> INICIA SESION COMO : <?= $usuarioValidado['tipo'] ?></span>
        </div>
    </nav>

    <main style="width:80%;margin:30px auto; display:flex;gap:10px;">
            <?php foreach ($montosYSaldos as $resultado): ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= base_url('img.png') ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Departamento : <?= $resultado->departamento ?></h5>
                    <p class="card-text">Saldo total : <?= $resultado->saldo_total  ?>Bs.</p>
                </div>
            </div>
        <?php endforeach; ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>