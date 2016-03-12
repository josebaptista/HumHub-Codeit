<?php
namespace humhub\modules\codeit;
use yii\helpers\Url;
use Yii;
/**
 * CODEITEvents is responsible to handle events defined by config.php
 *
 * @author Andreas Holzer / WebCrew
 */
class Events
{

    /**
     * On build of the TopMenu
     *
     * @param CEvent $event
     */

    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => 'CODEIT',
            'url' => Url::toRoute('/codeit/admin/index'),
            'group' => 'settings',
            'icon' => '<i class="fa fa-weixin"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'codeit' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }

}
