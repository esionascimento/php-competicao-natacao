<?php

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';

// print_r($categorias);

$nome = 'Esio';
$idade = 9;

// var_dump($nome);
// var_dump(idade);

if ($idade >= 6 && $idade <= 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil')
            echo 'O nadador '. $nome. ' compete na categora infantil';
    }
} else if ($idade >= 13 && $idade <= 18) {
    echo "Adolescente";
} else if ($idade >=19 && $idade <= 50) {
    echo 'Adulto';
} else {
    echo 'Não pode participar';
}

