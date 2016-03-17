<?php
/**
 * Created by PhpStorm.
 * User: John
 * Date: 3/17/2016
 * Time: 4:08 PM
 */

namespace comradepashka\ajaxable;

use yii;
use yii\base\Behavior;
use yii\web\View;

/**
 * Class AjaxableBehaviour
 * @package comradepashka\ajaxable
 *
 */

class AjaxableBehaviour extends Behavior
{
    public function events()
    {
        return [
            View::EVENT_END_BODY, [$this, 'registerToolsAsset']
        ];
    }
    public function render($view, $params = [])
    {
        return Yii::$app->request->isAjax ?
            $this->owner->renderAjax($view, $params) :
            $this->owner->render($view, $params);
    }
    public function registerToolsAsset($event)
    {
        $view = $event->sender;
        yii::trace("handle END_BODY from: {$view->viewFile}");
        if (yii::$app->controller == $this) {
            ToolsAsset::register($view);
        }
    }

}