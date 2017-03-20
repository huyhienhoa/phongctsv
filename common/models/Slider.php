<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tt_slider".
 *
 * @property integer $id
 * @property string $tieude
 * @property string $motangangon
 * @property string $link
 *
 * @property Hinhanhslider[] $ttHinhanhsliders
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tt_slider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tieude'], 'required'],
            [['tieude', 'link'], 'string', 'max' => 100],
            [['motangangon'], 'string', 'max' => 500],
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
            'motangangon' => 'Motangangon',
            'link' => 'Link',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHinhanhsliders()
    {
        return $this->hasMany(Hinhanhslider::className(), ['slider_id' => 'id']);
    }
}
