<?php
namespace humhub\modules\codeit;

use humhub\widgets\TopMenu;

return [
    'id' => 'codeit',
    'class' => 'humhub\modules\codeit\Module',
    'namespace' => 'humhub\modules\codeit',
    'events' => [
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::className(),
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\codeit\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>