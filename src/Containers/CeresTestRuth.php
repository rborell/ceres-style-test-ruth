<?php

namespace CeresTestRuth\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresTestRuth
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresTestRuth::CeresTestRuth');
    }
}
