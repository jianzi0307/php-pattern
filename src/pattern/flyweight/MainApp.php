<?php

require_once '../../../vendor/autoload.php';

use src\pattern\flyweight\factory\FiveChessmanFactory;


/**
 * 享元模式
 */
$fiveChessmanFactory = FiveChessmanFactory::getInstance();

$chessman = null;

//生成20个棋子
for ($i = 0; $i < 20; $i++) {
    $random = random_int(0, 1);
    switch ($random) {
        case 0:
            $chessman = $fiveChessmanFactory->getChess('B');
            break;
        case 1:
            $chessman = $fiveChessmanFactory->getChess('W');
            break;
    }
    if ($chessman) {
        $chessman->setLocation($i, random_int(10, 200));
    }
}
