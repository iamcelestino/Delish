<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
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
                    <?php if($cliente): ?>
                    <form action="/admin/cliente/delete/<?=$cliente[0]->id_cliente?>" method="POST">
                        <div class="">
                            <label for="" class="">Nome do cliente</label>
                            <input value="<?=$cliente[0]->nome?>" type="text" id="" name="nome" class="">

                            <label for="" class="">Telemovel</label>
                            <input value="<?=$cliente[0]->telefone?>" type="telefone" id="" name="telefone" class="">

                            <label for="" class="">Email</label>
                            <input value="<?=$cliente[0]->email?>" type="email" id="" name="email" class="">
                            <button type="submit" class="">Deletar Cliente</button>
                        </div>
                    </form>
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