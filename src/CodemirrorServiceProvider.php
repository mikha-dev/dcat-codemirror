<?php

namespace Dcat\Admin;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form as BaseForm;

class CodemirrorServiceProvider extends ServiceProvider
{
	protected $js = [
	    'lib/codemirror.js',
		'mode/css/css.js',
		'mode/php/php.js'
    ];
	protected $css = [
		'lib/codemirror.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

        Admin::requireAssets('@mikha-dev.dcat-codemirror');
        $this->loadViewsFrom(__DIR__.'/../resources/views', '@mikha-dev.dcat-codemirror');
        BaseForm::extend('codemirror', Codemirror::class);

	}
}
