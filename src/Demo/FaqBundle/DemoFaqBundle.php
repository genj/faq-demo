<?php

namespace Demo\FaqBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DemoFaqBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'GenjFaqBundle';
    }
}
