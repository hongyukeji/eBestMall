<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/3 0:15
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;

use ebestmall\web\EbmAsset;
EbmAsset::register($this);
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;
$this->registerCssFile($baseUrl .'/css/member.css', ['depends' => EbmAsset::className()]);

$this->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['description']], 'description');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="renderer" content="webkit">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <!-- Public-Header -->
    <?= $this->render(
        'header.php',
        ['baseUrl' => $baseUrl]
    ) ?>

    <!-- Public-Content -->
    <?= $this->render(
        'content-member.php',
        ['content' => $content,'baseUrl' => $baseUrl]
    ) ?>

    <!-- Public-Footer -->
    <?= $this->render(
        'footer.php',
        ['baseUrl' => $baseUrl]
    ) ?>

    <!-- Public-Side -->
    <?= $this->render(
        'side.php',
        ['baseUrl' => $baseUrl]
    ) ?>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>