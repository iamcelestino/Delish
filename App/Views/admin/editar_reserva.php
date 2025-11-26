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
                    <?php if($reserva): ?>
                    <form action="/admin/reserva/update/<?= $reserva->id_reserva ?>" method="POST">
                        <div>
                            <label for="" class="">Numero da mesa</label>
                            <input value="<?= $reserva->id_mesa ?>" type="number" name="numero_pessoas" class="">

                            <label for="" class="">Data da reserva</label>
                            <input value="<?= $reserva->data_reserva ?>" type="date" id="" name="data_reserva" class="">

                            <label for="" class="">hora da reseva</label>
                            <input value="<?= $reserva->hora_reserva ?>" type="time" id="hora_reserva" name="hora_reserva">

                            <label for="" class="">Pessoas</label>
                            <input value="<?= $reserva->pessoas?>" type="number" id="" name="pessoas" class="">

                            <!-- <label for="" class="">Seu Nome</label>
                            <input value="<?= $reserva->nome?>" type="text" id="" name="nome" class="">

                            <label for="" class="">Numero de telemovel</label>
                            <input value="<?= $reserva->telefone ?>" type="text" id="" name="telefone" class="">

                            <label for="" class="">email</label>
                            <input value="<?= $reserva->email ?>" type="text" id="" name="email" class=""> -->

                            <button type="submit" class="">Reservar uma mesa</button>

                        </div>
                    </form>
                    <?php else: ?>
                    <?php endif ?>
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