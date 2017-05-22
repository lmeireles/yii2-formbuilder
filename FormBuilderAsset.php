<?php

namespace meysampg\formbuilder;

use yii\web\AssetBundle;
use yii\base\InvalidConfigException;

class FormBuilderAsset extends AssetBundle
{
    public $sourcePath = '@npm/formBuilder';

    public function init()
    {
        // Add css file based on app environment
        $this->css[] = 'css/simple.css';

        // Add js file based on app environment
        $this->js[] = 'formBuilder.js';
    }

    public $depends = [
        'yii\jui\JuiAsset',
    ];
}
