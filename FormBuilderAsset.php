<?php

namespace meysampg\formbuilder;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

class FormBuilderAsset extends AssetBundle
{
    public $sourcePath = '@vendor/kevinchappell/form-builder/dist';

    public function init()
    {
        $this->js[] = 'form-builder.min.js';
        $this->js[] = 'form-render.min.js';
    }

    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
