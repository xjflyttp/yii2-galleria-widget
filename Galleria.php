<?php

namespace xj\galleria;

use Yii;
use yii\base\Widget;
use yii\helpers\Json;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * 
 * @author xjflyttp <xjflyttp@gmail.com>
 * @see http://galleria.io/docs/api/utilities/#static-methods
 * @see http://galleria.io/docs/api/events/#how-to-use-the-events
 */
class Galleria extends Widget
{

    /**
     * render to jquery selector
     * @var string
     */
    public $selector;

    /**
     *
     * @var int 
     * @see http://www.yiiframework.com/doc-2.0/yii-web-view.html#registerJs%28%29-detail
     * @example
     * View::POS_READY
     * View::POS_LOAD
     * View::POS_END
     */
    public $registerPosition = View::POS_END;

    /**
     * jplayer options
     * @var array
     * @see http://galleria.io/docs/
     * @see http://galleria.io/docs/options/
     * @see http://galleria.io/docs/options/dataSource/
     */
    public $jsOptions = [];

    /**
     * 
     * @var []
     * @example
     * [
     * 'galleria/themes/classic/galleria.classic.js',
     * 'galleria/themes/twelve/galleria.twelve.js',
     * ]
     */
    public $themes = [];

    /**
     *
     * @var AssetBundle
     */
    private $assetBundle;

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->loadAssets();

        $this->registerScripts();

        parent::run();
    }

    private function loadAssets()
    {
        $this->assetBundle = GalleriaAssets::register($this->view);
        
        if (empty($this->themes)) {
            $this->themes[] = $this->assetBundle->baseUrl . '/themes/classic/galleria.classic.js';
        }
        
        foreach ($this->themes as $themeUrl) {
            $js = "Galleria.loadTheme('{$themeUrl}');";
            $this->view->registerJs($js, $this->registerPosition);
        }
    }

    private function registerScripts()
    {
        $jsOptions = Json::encode($this->jsOptions);
        $script = "Galleria.run('{$this->selector}', {$jsOptions});";
        $this->view->registerJs($script, $this->registerPosition);
    }

}
