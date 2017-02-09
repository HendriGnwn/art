<?php

use app\components\View;
use app\models\Portfolio;
use app\widgets\PortfolioWidget;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $this View */
/* @var $portfolios Portfolio */

$this->title = 'Our Portfolios';
$this->params['breadcrumbs'][] = $this->title;

$description = 'This is a portfolios of the Art Techno Corporation, We are work with great heart';

/** SEO */
$this->registerMetaTag([
    'http-equiv' => 'Content-Type',
    'content' => 'text/html; charset=utf-8'
]);
$this->registerLinkAlternate();
$this->registerLinkCanonical();
$this->registerMetaTitle();
$this->registerMetaKeywords($this->title);
$this->registerMetaDescription($description);
$this->registerMetaTag([
    'name' => 'robots',
    'content' => 'noindex,nofollow',
]);
$socialMedia = [
    'title' => $this->title .' - '. Yii::$app->name,
    'description' => $description,
];
$this->registerMetaSocialMedia($socialMedia);

?>

<?= PortfolioWidget::widget([
    'portfolios' => $portfolios,
]) ?>