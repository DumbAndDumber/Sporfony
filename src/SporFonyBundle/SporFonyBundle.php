<?php

namespace SporFonyBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SporFonyBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
