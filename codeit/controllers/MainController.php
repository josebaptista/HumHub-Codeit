<?php

/**
 * MainController shows the CODEIT page
 *
 * @author Andreas Holzer
 */
class MainController extends Controller
{

    public function actionIndex()
    {
        $this->render('index');
    }

}
