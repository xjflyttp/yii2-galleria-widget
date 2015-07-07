<?php

namespace xj\galleria;

use Yii;
use yii\web\AssetBundle;

class GalleriaAssets extends AssetBundle
{

    public $sourcePath = '@bower/galleria/src';
    public $basePath = '@webroot/assets';
    public $js = ['galleria.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
