<?php

/**
 * CODEITEvents is responsible to handle events defined by config.php
 *
 * @author Andreas Holzer / WebCrew
 */
class CODEITEvents
{

    /**
     * On build of the TopMenu
     *
     * @param CEvent $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem(array(
            'label' => Yii::t('CODEIT.base', 'CODEIT'),
            'url' => Yii::app()->createUrl('/codeit/main/index', array()),
            'icon' => '<i class="fa fa-pencil"></i>',
            'isActive' => (Yii::app()->controller->module && Yii::app()->controller->module->id == 'codeit'),
        ));
    }

}
