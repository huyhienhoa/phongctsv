<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tt_filedinhkem".
 *
 * @property integer $id
 * @property string $file
 * @property integer $tintuc_id
 *
 * @property Tintuc $tintuc
 */
class Filedinhkem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tt_filedinhkem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['file', 'tintuc_id'], 'required'],
            [['tintuc_id'], 'integer'],
            [['file'], 'string', 'max' => 200],
            [['tintuc_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tintuc::className(), 'targetAttribute' => ['tintuc_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file' => 'File',
            'tintuc_id' => 'Tintuc ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTintuc()
    {
        return $this->hasOne(Tintuc::className(), ['id' => 'tintuc_id']);
    }
}
