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
                        <p class="font-bold text-2xl">Mesas</p>
                    </a>
                </div>
            </div>
            <div class="mt-5">
                <h1 class="font-bold text-2xl mb-5">Reservas Pendentes</h1>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cliente</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mesa</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Data da Reserva</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Hora de Reserva</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pessoas</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <?php if($reservas): ?>
                        <?php foreach($reservas as $reserva): ?>
                    <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $reserva->cliente_nome ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $reserva->mesa_numero ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $reserva->data_reserva ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $reserva->hora_reserva?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $reserva->pessoas ?></td>
                                <td class="px-6 py-4 whitespace-nowrap"><?= $reserva->mesa_status?></td> 
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="/admin/pedidos/create/<?= $reserva->id_reserva ?>">Fazer Pedido</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="/admin/reserva/update/<?= $reserva->id_reserva ?>">Editar</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="/admin/reserva/delete/<?= $reserva->id_reserva ?>">Deletar</a>
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