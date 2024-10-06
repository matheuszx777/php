<?php
require __DIR__ . '/../vendor/autoload.php';

use GraphQL\GraphQL;
use GraphQL\Type\Schema;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use Prisma\Client;

// Inicializar o cliente Prisma
$prisma = new Client();

// Definir o tipo Product
$productType = new ObjectType([
    'name'   => 'Product',
    'fields' => [
        'id'    => Type::int(),
        'name'  => Type::string(),
        'price' => Type::float(),
    ],
]);

// Definir o tipo Query
$queryType = new ObjectType([
    'name'   => 'Query',
    'fields' => [
        'products' => [
            'type'    => Type::listOf($productType),
            'resolve' => function () use ($prisma) {
                return $prisma->product->findMany();
            },
        ],
    ],
]);

// Criar o esquema GraphQL
$schema = new Schema([
    'query' => $queryType,
]);

// Processar a requisição GraphQL
try {
    $rawInput = file_get_contents('php://input');
    $input    = json_decode($rawInput, true);
    $query    = $input['query'];
    $variables = $input['variables'] ?? null;

    $result = GraphQL::executeQuery($schema, $query, null, null, $variables);
    $output = $result->toArray();
} catch (\Exception $e) {
    $output = [
        'errors' => [
            ['message' => $e->getMessage()],
        ],
    ];
}

// Definir cabeçalhos e retornar a resposta
header('Content-Type: application/json');
echo json_encode($output);



// Definir o tipo Mutation
$mutationType = new ObjectType([
    'name'   => 'Mutation',
    'fields' => [
        'createProduct' => [
            'type' => $productType,
            'args' => [
                'name'  => Type::nonNull(Type::string()),
                'price' => Type::nonNull(Type::float()),
            ],
            'resolve' => function ($root, $args) use ($prisma) {
                return $prisma->product->create([
                    'data' => [
                        'name'  => $args['name'],
                        'price' => $args['price'],
                    ],
                ]);
            },
        ],
    ],
]);

// Atualizar o esquema GraphQL
$schema = new Schema([
    'query'    => $queryType,
    'mutation' => $mutationType,
]);

