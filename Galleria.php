<?php

namespace xj\galleria;

use Yii;
use yii\base\Widget;
use yii\helpers\Json;
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
     * Renders the widget.
     */
    public function run()
    {
        GalleriaAssets::register($this->view);

        $this->registerScripts();

        parent::run();
    }

    protected function registerScripts()
    {
        $jsOptions = Json::encode($this->jsOptions);
        $script = "Galleria.run('{$this->selector}', {$jsOptions});";
        $this->view->registerJs($script, $this->registerPosition);
    }

}
