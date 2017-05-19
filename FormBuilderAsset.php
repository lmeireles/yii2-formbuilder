<?php

namespace meysampg\formbuilder;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

class FormBuilderAsset extends AssetBundle
{
    public $sourcePath = '@npm/formBuilder/dist';

    public function init()
    {
        // Add css file based on app environment
        $this->css[] = YII_DEBUG ? 'form-builder.css' : 'form-builder.min.css';

        // Add js file based on app environment
        $this->js[] = YII_DEBUG ? 'form-builder.js' : 'form-builder.min.js';
        $this->js[] = YII_DEBUG ? 'form-render.js' : 'form-render.min.js';
    }

    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
