<?php

namespace pAndyVl\animate;

use yii\web\AssetBundle;

class AnimateAssetBundle extends AssetBundle
{
    public $sourcePath = '@bower/animate.css';

    public $css = [
        'css/animate.min.css',
    ];
}
