<?php
require __DIR__ . '/vendor/autoload.php';

use Prisma\Client;

// Inicializar o cliente Prisma
$prisma = new Client();

$products = [
    ['name' => 'Produto 1', 'price' => 10.0],
    ['name' => 'Produto 2', 'price' => 15.0],
    ['name' => 'Produto 3', 'price' => 20.0],
];

foreach ($products as $productData) {
    $prisma->product->create([
        'data' => $productData,
    ]);
}

echo "Banco de dados populado com sucesso.\n";
