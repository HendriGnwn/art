<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\widgets;

/**
 * Description of NavbarWidget
 *
 * @author Hendri <hendri.gnw@gmail.com>
 */
class NavbarWidget extends \yii\bootstrap\Widget
{
    public $mainMenuParams = [];
    
    public function run()
    {
        return $this->render('navbar', [
            'mainMenuParams' => $this->mainMenuParams,
        ]);
    }
}
