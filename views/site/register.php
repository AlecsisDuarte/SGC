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
                  <h1><i class="fa fa-paw"></i> Sistema de Gestion de Calidad!</h1>
                  <p>©2017 Todos los derechos reservados - BurnApps</p>
                </div>
              </div>
            </form>
            <?php ActiveForm::end(); ?>
          </section>
        </div>