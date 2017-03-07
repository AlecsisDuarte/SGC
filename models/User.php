<?php

namespace app\models;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
      $usuario = (new \yii\db\Query())
                  ->select('*')
                  ->where(['id' => $id])
                  ->from('users')
                  ->one();
          if($usuario === false){
            return null;
          }
          return new static($usuario);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      $usuario = (new \yii\db\Query())
                  ->select('*')
                  ->where(['accessToken' => $token])
                  ->from('users')
                  ->one();
      if($usuario === false){
        return null;
      }
      return new static($usuario);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
      $usuario = (new \yii\db\Query())
                  ->select('*')
                  ->where(['username' => $username])
                  ->from('users')
                  ->one();
      if($usuario === false){
        return null;
      }
      return new static($usuario);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
      return $password === $this->password;
      // return password_verify($password, $this->password);
    }
}
