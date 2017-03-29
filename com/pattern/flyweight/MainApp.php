<?php
require ('../loader/autoload.php');
/**
 * 享元模式
 */

$fiveChessmanFactory = \com\pattern\flyweight\factory\FiveChessmanFactory::getInstance();

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
        $chessman->show();
    }
}