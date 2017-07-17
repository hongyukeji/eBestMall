<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/5 9:38
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */

use yii\helpers\Html;

$this->registerMetaTag(['name' => 'keywords', 'content' => Yii::$app->params['site']['keywords']]);
$this->registerMetaTag(['name' => 'description', 'content' => Yii::$app->params['site']['description']], 'description');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<?= $this->render('head.php') ?>
<body>
<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
