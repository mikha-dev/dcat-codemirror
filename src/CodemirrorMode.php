<?php

namespace Dcat\Admin;

use Dcat\Admin\DcatEnum;
use Dcat\Admin\Traits\DcatEnumTrait;

enum CodemirrorMode: string implements DcatEnum
{
    use DcatEnumTrait;

    case PHP = 'text/x-php';
    case CSS = 'text/css';
}
