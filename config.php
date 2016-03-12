<?php

Yii::app()->moduleManager->register(array(
    'id' => 'codeit',
    'class' => 'application.modules.codeit.CODEIT',
    'import' => array(
        'application.modules.codeit.*',
    ),
    'events' => array(
        array('class' => 'TopMenuWidget', 'event' => 'onInit', 'callback' => array('CODEITEvents', 'onTopMenuInit')),
    ),
));
?>