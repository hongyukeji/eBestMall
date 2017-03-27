<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use hongyukeji\imperavi\Widget;
use common\models\ArticleCat;
/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'articleTitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'articleCatId')->dropdownList(
        ArticleCat::find()->select(['articleCatName', 'articleCatId'])->indexBy('articleCatId')->column(),
        ['prompt'=>Yii::t('app','Please select the article category')]
    ); ?>

    <?= $form->field($model, 'articleContent')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'zh_cn',
            'minHeight' => 200,
            'plugins' => [
                'clips',
                'fullscreen'
            ]
        ]
    ]) ?>

    <?= $form->field($model, 'status')->dropDownList(['1' => '是', '0' => '否']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
