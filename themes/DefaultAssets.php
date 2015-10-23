<?php

namespace xj\galleria\themes;

use Yii;
use yii\web\AssetBundle;

class DefaultAssets extends AssetBundle
{

    public $sourcePath = '@bower/galleria/src';
    public $basePath = '@webroot/assets';
    public $js = ['themes/classic/galleria.classic.js'];
    public $css = ['themes/classic/galleria.classic.css'];
    public $depends = ['xj\galleria\GalleriaAssets'];

}
