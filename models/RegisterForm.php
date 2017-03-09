<?php
    namespace app\models;

    use Yii;
    use yii\base\Model;

    /*
    *RegisterForm is the model behind the register form.
    *
    * @property User|null $user this property is read only
    *
    */
    Class RegisterForm extends Model
    {
        public $username;
        public $password;
        public $password2;

        private $_user = false;

        /*
        *   @return array the validation rules.
        */
        public function rules()
        {
            return [
                // usuario, contraseña, contraseña2, correo y verificacion son requeridos
                [['usuario', 'password','password2'],'required'],
                ['password', 'validatePassword'],
                ['password2', 'validateRepeatedPass'],
            ];
        }

        public function validatePassword($atribute, $params)
        {
          if (!$this->hasErrors()) {
              $user = $this->getUser();

              if (!$user || !$user->validatePassword($this->password)) {
                  $this->addError($attribute, 'Numero de Control o contraseña incorrectas.');
              }
          }
        }

        public function validateRepeatedPass($atribute, $params)
        {
          if($this->password !== $this->password2){
            $this->addError($attribute, 'Las contraseñas no concuerdan.');
          }
        }

        public function register()
        {
            if ($this->validate()) {
                return Yii::$app->user->login($this->getUser(), 0);
            }
            return false;
        }

    }
?>
