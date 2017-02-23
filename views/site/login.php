<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Iniciar Sesion';
$this->params['breadcrumbs'][] = $this->title;

 ?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body class="site-login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'layout' => 'inline'
            ]); ?>
            <form>
            <h1><?= Html::encode($this->title) ?></h1>
              <div>
                <?= $form->field($model, 'usuario')->textInput(['autofocus' => true])->input('usuario',['placeholder' => 'Usuario'])->label(false);?>
              </div>
              <div>
                <?= $form->field($model, 'password')->passwordInput()->input('password',['placeholder' => 'Contraseña'])->label(false); ?>
              </div>
              <div>
                <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">¿Nuevo en el Sitio?
                  <a href="#signup" class="to_register" onclick="toggleRegister()"> Crea una Cuenta </a>
                  <script type="text/javascript">
                    function toggleRegister(){
                      $("#register").toggle();
                    }
                  </script>
                </p>
                <div class="separator"></div>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-wrench"></i> Sistema de Gestion de Calidad!</h1>
                  <p>©2017 Todos los derechos reservados - BurnApps</p>
                </div>
              </div>
            </form>
            <?php ActiveForm::end(); ?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
