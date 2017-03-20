<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tt_admin".
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property string $vaitro
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tt_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password_hash', 'email', 'vaitro'], 'required'],
            [['vaitro'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'auth_key'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'auth_key' => 'Auth Key',
            'vaitro' => 'Vaitro',
        ];
    }
}
