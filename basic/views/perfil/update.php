<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Perfil */

$this->title = Yii::t('app', 'Update Perfil: {nameAttribute}', [
    'nameAttribute' => $model->nick,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Mi Perfil'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
$_SESSION['id']=Yii::$app->user->id
?>
<div class="perfil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
