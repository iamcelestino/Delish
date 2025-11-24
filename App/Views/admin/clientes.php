<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="/src/output.css">
</head>
<body class="">
    <header class="">
        <div class="">
        </div>
    </header>
    <main>
    <section class="">
        <div class="container py-16">
            <div class="sm:flex items-center justify-round gap-10 mt-4 border-2 border-gray-200 p-2">
                <div class="flex-1 bg-gray-200 p-8 mb-2 md:mb-0 hover:bg-[#3F3D56] hover:text-white  rounded-md">
                    <a href="" class="">
                        <h3 class="font-bold text-3xl"> </h3>
                        <P class="font-bold text-2xl">Clientes</P>
                    </a>
                </div>
                <div class="flex-1 bg-gray-200 p-8 mb-2 md:mb-0 hover:bg-[#3F3D56] hover:text-white  rounded-md">
                    <a href="" class="">
                        <h3 class="font-bold text-3xl"></h3>
                        <p class="font-bold text-2xl">Pedidos</p>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="font-bold text-2xl mb-5">Todos os Clintes</h1>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Telefone</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data de Registro</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <?php if($clientes): ?>
                        <?php foreach($clientes as $cliente): ?>
                    <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td> 
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <<a href="/admin/cliente/update/<?=$cliente->id_cliente;?>" title="">editar</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <<a href="/admin/cliente/delete/<?=$cliente->id_cliente;?>" title="">apagar</a>
                                </td>
                            </tr>
                    </tbody>
                        <?php endforeach ?>
                    <?php else: ?>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class=" text-center text-2xl">
                                </td>
                            </tr>
                        </tbody>
                    <?php endif ?>
                </table>
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