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
        public $usuario;
        public $password;
        public $password2;
        public $correo;
        public $verifiacion;

        private $_user = false;

        /*
        *   @return array the validation rules.
        */
        public function rules()
        {
            return [
                // usuario, contraseña, contraseña2, correo y verificacion son requeridos
                [['usuario', 'password','password2','correro','verificacion'],'require'],
                ['password', 'validatePassword'],
                ['password2', 'validatePassword'],
            ];
        }

    }
?>