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

use ebestmall\assets\EbmAsset;
EbmAsset::register($this);
$baseUrl = $this->assetBundles[EbmAsset::className()]->baseUrl;

$this->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['description']], 'description');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <?= $this->render('head.php') ?>
    <body>
    <?php $this->beginBody() ?>

    <!-- Public-Header -->
    <?= $this->render(
        'header.php',
        ['baseUrl' => $baseUrl]
    ) ?>

    <!-- Public-Content -->
    <?= $this->render(
        'content.php',
        ['content' => $content,'baseUrl' => $baseUrl]
    ) ?>

    <!-- Public-Footer -->
    <?= $this->render(
        'footer.php',
        ['baseUrl' => $baseUrl]
    ) ?>

    <!-- Public-Search -->
    <?= $this->render(
        'search.php',
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