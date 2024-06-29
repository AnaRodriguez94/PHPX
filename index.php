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
        'text' => 'Hola buenos dias',
        'author' => 'Moises',
        'user' => 'Moises123'
    ],
    [
        'text' => 'En un lugar de la mancha',
        'author' => 'Cervantes',
        'user' => 'MACervantes'
    ]
];

require_once "index.html";

