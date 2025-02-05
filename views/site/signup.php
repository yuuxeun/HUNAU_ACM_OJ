<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\SignupForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Signup');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="form-signin">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'major')->dropDownList([
        '' => '',
        '计算机' => '计算机',
        '东方计算机' => '东方计算机',
        '智能' => '智能',
        '大数据' => '大数据',
        '互联网' => '互联网',
        '电信' => '电信',
        '物联网' => '物联网',
    ]) ?>

    <?= $form->field($model, 'studentNumber') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'verifyCode')->widget(\yii\captcha\Captcha::className()); ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Signup'), ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>

