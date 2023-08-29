<?php

namespace Dcat\Admin;

use Dcat\Admin\CodemirrorMode;
use Dcat\Admin\Form\Field;
use Dcat\Admin\Support\JavaScript;

class Codemirror extends Field
{
    protected $view = 'mikha-dev.dcat-codemirror::codemirror';
    protected CodemirrorMode $mode = CodemirrorMode::CSS;

    public function mode(CodemirrorMode $mode) : Codemirror {
        return $this;
    }

    public function render()
    {
        $this->addVariables([
            'mode' => $this->mode
        ]);  
        return parent::render();
    }
}
