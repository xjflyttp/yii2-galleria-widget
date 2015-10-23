<?php

namespace xj\galleria\themes;

use Yii;
use yii\web\AssetBundle;

class TwelveAssets extends AssetBundle
{

    public $sourcePath = '@bower/galleria/src';
    public $basePath = '@webroot/assets';
    public $js = ['themes/twelve/galleria.twelve.js'];
    public $css = ['themes/twelve/galleria.twelve.css'];
    public $depends = ['xj\galleria\GalleriaAssets'];

}
