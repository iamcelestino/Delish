<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratos</title>
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
                    <?php if($prato): ?>
                    <form action="/admin/prato/update/<?=$prato->id_prato?>" method="POST">
                        <div>
                            <label for="" class="">Nome</label>
                            <input value="<?=$prato->nome;?>" type="text" id="" name="nome" class="">

                            <label for="" class="">Preco</label>
                            <input value="<?=$prato->preco;?>" type="number" id="" name="preco" class="">

                            <label for="" class="">imageURl</label>
                            <input value="<?=$prato->imagem_url;?>"  type="" id="" name="imagem_url" class="">

                            <label for="" class="">descricao</label>
                            <input value="<?=$prato->descricao;?>"  type="descricao" id="" name="descricao">

                            <select name="categoria" id="">
                                <option value="">Selecione a categoria</option>
                                <option value="Entrada ">Matabicho</option>
                                <option value="prato_principal">Almoco</option>
                                <option value="sobremesa">Jantar</option>
                                <option value="bebida">Jantar</option>
                            </select>

                            <button type="submit" class="">Editar Prato</button>
                        </div>
                    </form>
                    <?php else: ?>
                        <h1>Produto não encontrado</h1>
                    <?php endif?>
                </div>
            </div>
        </section>
        <section id="" class="">
            
        </section>
    </main>
    <footer>
        <div>

        </div>
    </footer>
</body>
</html>