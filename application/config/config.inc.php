<?php
// Exten��o da classes
define ('EXT', '.class.php');

// Inclus�o da biblioteca Smarty
// Ele tem um autoload pr�prio e gera conflito com o criado por mim
include_once './system/libs/smarty/Smarty.class.php';

// Fun��o para inser��o de arquivos necess�rio por demanda
function __autoload ($class) {
    // Diretorios
    $dir = array (
        'system/libs/Smarty/',
        'system/libs/PDO/',
        'system/mvc/',
        'application/view/',
        'application/model/',
        'application/controller/'
    );
    // Percorre o vetor de diretorios
    foreach ($dir as $value) {
        // Verifica se a classe existe
        if (is_file($file = $value . $class . EXT)) {
            // Inclui a classe
            include_once $file;
        }
    }
}

// Registro da fun��o __autoload para funcionar como autoload
spl_autoload_register('__autoload');
?>
