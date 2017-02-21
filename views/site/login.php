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

    <!-- Bootstrap -->
    <!--link href="css/main_login/bootstrap.min.css" rel="stylesheet"-->
    <!-- Font Awesome -->
    <!--link href="css/main_login/font-awesome.min.css" rel="stylesheet"-->
    <!-- NProgress -->
    <!--link href="css/main_login/nprogress.css" rel="stylesheet"-->
    <!-- Animate.css -->
    <!--link href="css/main_login/animate.min.css" rel="stylesheet"-->

    <!-- Custom Theme Style -->
    <!-- <link href="../build/css/custom.min.css" rel="stylesheet"> -->
  </head>

  <body class="site-login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php $form = ActiveForm::begin([
              'id' => 'login-form',
              'layout' => 'horizontal'
            ]); ?>
            <form>
            <h1><?= Html::encode($this->title) ?></h1>
              <div>
                <?= $form->field($model, 'usuario')->textInput(['autofocus' => true])?>
                <!-- <input type="text" class="form-control" placeholder="Username" required="" /> -->
              </div>
              <div>
                <?= $form->field($model, 'password')->passwordInput() ?>
              </div>
              <div>
                <?= Html::submitButton('Entrar', ['class' => 'btn btn-default', 'name' => 'login-button']) ?>
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
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
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
            <?php ActiveForm::end(); ?>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?php $form = ActiveForm::begin([
              'id' => 'createUser-form',
              'layout' => 'horizontal'
            ]); ?>
            <form>
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
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
