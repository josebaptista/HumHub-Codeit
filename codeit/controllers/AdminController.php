<?php
namespace humhub\modules\codeit\controllers;
/**
 * MainController shows the CODEIT page
 *
 * @author Andreas Holzer
 */
class AdminController extends \humhub\modules\admin\components\Controller
{
	    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'adminOnly' => true
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', array());
    }

}
