<?php
//Añadimos 3 var: Texto, autor, user//
$text = "Soy un coche rojo";
$author = "Cervantes";
$user = "Ana";

$tweets = [
    [
        'text' => $text,
        'author' => $author,
        'user' => $user
    ],
    [
        'text' => 'Hello World',
        'author' => 'PHP',
        'user' => 'PHP123'
    ],
    [
        'text' => 'En un lugar de la Mancha',
        'author' => 'Miguel de Cervantes',
        'user' => 'MACDS'
    ],
];


require_once "index.html";
