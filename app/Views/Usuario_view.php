<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
    <!-- As a link -->
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Ejercicio 5 - Leonel Moises Chauca Maydana</a>
    </div>
    </nav>
    <main style="width: 80%; margin:30px auto;">
        <h3>Listado de Cuentas</h3>
        <table class="table" style="margin:0 auto;width: 90%; max-width:900px;">
            <thead>
                <tr>
                    <th style="width: 5%" scope="col">#</th>
                    <th style="width: 15%" scope="col">Numero de cuenta</th>
                    <th style="width: 10%" scope="col">saldo</th>
                    <th style="width: 15%" scope="col">tipo de cuenta</th>
                    <th style="width: 10%" scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $cont = 1; 
                    foreach ($cuentas as $cuenta): ?>
                    <tr>
                        <th><?= $cont++ ?></th>
                        <td><?= $cuenta['numero_cuenta'] ?></td>
                        <td><?= $cuenta['saldo'] ?></td>
                        <td><?= $cuenta['tipo'] ?></td>
                        <form action="<?= base_url('usuario/eliminar') ?>" method="post" >
                        <input name="cbancaria_id" type="hidden" value="<?= $cuenta['cbancaria_id']?>">
                        <td><button type="submit" class="btn btn-danger" id="<? $cbancaria_id ?>">Eliminar</button></td>
                        </form>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
