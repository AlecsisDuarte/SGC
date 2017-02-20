<?php
    namespace app\models;
    use Yii;
    use yii\base\Model;
    class EntryForm extends Model
    {
        public $name;
        public $email;
        public $age;

        public function rules()
        {
            return [
                [['name', 'email'], 'required'],
                ['email','email'],
                ['age', 'number']
            ];
        }
    }
    ?>
    <?php
    $model = new EntryForm();
    $model->name = 'Qiang';
    $model->email = 'bad';
    if($model->validate()){
        echo "The hell?";
    }else{
        $model->getErrors();
    }