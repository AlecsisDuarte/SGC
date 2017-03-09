<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar Sesion';
$this->params['breadcrumbs'][] = $this->title;
?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<div class="site-login">
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <?php $form = ActiveForm::begin([
          'id' => 'login-form',
          'layout' => 'horizontal',
          'fieldConfig' => [
            'template' => "{label}\n<div class=\"\">{input}</div>\n<div class=\"\">{error}</div>",
            'labelOptions' => ['class' => ' control-label'],
          ],
        ]); ?>
        <h1><?= Html::encode($this->title) ?></h1>
        <p>Favor de llenar los campos:</p>

        <div>
          <?= $form->field($model, 'username')->textInput(['autofocus' => true])->input('usuario', ['placeholder' => 'Numero de Empleado'])->label(false); ?>
        </div>
        <div>
          <?= $form->field($model, 'password')->passwordInput()->input('password', ['placeholder' => 'Contraseña'])->label(false); ?>
        </div>
        <div class="form-group">
          <div>
            <?= Html::submitButton('Entrar', ['class' => 'btn btn-info', 'name' => 'login-button']) ?>
          </div>
        </div>

        <?php ActiveForm::end(); ?>

        <div class="col-lg-offset-1" style="color:#999;">
          No podras iniciar sesion almenos que crees una base de datos <strong>ni pedo</strong> 8- ).
        </div>
      </section>
    </div>
  </div>
</div>
