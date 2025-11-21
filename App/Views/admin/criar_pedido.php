<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
    <link rel="stylesheet" href="/src/output.css">
</head>
<body class="">
    <header class="">
        <div class="">

        </div>
    </header>
    <main>
        <section class="banner">
            <div class="">
                <div class="">
        
                </div>
            </div>
        </section>
        <section id="fazer_reservas" class="">
            <div class="container">
                <div class="">
                    <form action="/admin/pedidos/create/5" method="POST">
                        <div>
                            <label for="" class="">Quantidate</label>
                            <input type="number" id="" name="quantidade" class="">

                            <?php if($pratos): ?>
                                <select name="id_prato" id="">
                                    <option value="">Selecione o prato</option>
                                    <?php foreach($pratos as $prato): ?>
                                    <option value="<?= $prato->id_prato ?>"><?= $prato->nome ?></option>
                                    <?php endforeach?>
                                </select>
                            <?php else: ?>
                                <h1>Ainda não temos pratos disponiveis</h1>
                            <?php endif ?>

                            <select name="status" id="">
                                <option value=""></option>
                                <option value="pendente">Pendente</option>
                                <option value="preparando">Preparando</option>
                                <option value="entregue">Entregue</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                            <button type="submit" class="">Reservar uma mesa</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div>

        </div>
    </footer>
</body>
</html>