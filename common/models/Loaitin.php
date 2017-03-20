<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tt_loaitin".
 *
 * @property integer $id
 * @property string $tieude
 * @property string $code
 * @property string $motangangon
 * @property string $anhminhhoa
 *
 * @property Tintuc[] $Tintucs
 */
class Loaitin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tt_loaitin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tieude', 'motangangon'], 'required'],
            [['tieude', 'code', 'anhminhhoa'], 'string', 'max' => 100],
            [['motangangon'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tieude' => 'Tieude',
            'code' => 'Code',
            'motangangon' => 'Motangangon',
            'anhminhhoa' => 'Anhminhhoa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTintucs()
    {
        return $this->hasMany(Tintuc::className(), ['loaitin_id' => 'id']);
    }
}
